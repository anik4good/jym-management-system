<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Mealtime;
use App\Models\Morning;
use App\Models\Night;
use App\Models\Noon;
use App\Models\Diet;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DietController extends Controller
{

    public function index()
    {
        Gate::authorize('app.diets.index');
        $diets = Diet::all();
        if (Auth::user()->role->slug == 'user') {
            $diets = Diet::where('user_id', Auth::id())->get();
        }
        return view('backend.diets.index', compact('diets'));
    }


    public function creatediet($id)
    {
        Gate::authorize('app.diets.createmeal');
        $user = User::with('userprofile')->where('id', $id)->first();
        return view('backend.diets.create', compact('user'));
    }


    public function store(Request $request)
    {


        $prepmeal = new Diet();
        $prepmeal->user_id = $request->user_id;
        $prepmeal->name = $request->name;
        $prepmeal->save();
        Artisan::call('create:meal --calories=' . $request->calories . ' --meals=' . $request->meals . ' --user_id=' . $request->user_id . ' --user_meal_id=' . $prepmeal->id);
        return redirect()->route('app.diet.generator.show.single','diet_id='.$prepmeal->id);

    }


    //diet generator for single diets
    public function show(Request $request)
    {



        Gate::authorize('app.diet.generator.show.single');

        $post_id = $request->diet_id;
        $table = new Food();

        $foods = $table->where(function ($q) use ($request) {
            if ($request->data) {
                //  $q->where('$request->data', 'LIKE', "%$request->data%");
                $q->whereBetween($request->data, [$request->start, $request->end])->orderby($request->data);
            }
            else {
                //nothing
            }
        })->paginate(10);


        $foods->withPath('?diet_id='.$post_id.'&data='.$request->data.'&start='.$request->start.'&end='.$request->end.'');

        $column = $table->getTableColumns();
       // $foods = Food::paginate(10);

       // $morning = Morning::where('post_id', $post_id)->get();
       // $noon = Noon::where('post_id', $post_id)->get();
       // $night = Night::where('post_id', $post_id)->get();

         $morning = Morning::where('post_id', $post_id)->get();
        $noon = DB::table('noons')->where('post_id', $post_id)->get();
        $night = DB::table('nights')->where('post_id', $post_id)->get();

//        $morning = Cache()->remember('morning-all', 60 * 60 * 24, function () use ($post_id) {
//            return   DB::table('mornings')->where('post_id', $post_id)->get();
//        });
//
//        $noon = Cache()->remember('noon-all', 60 * 60 * 24, function () use ($post_id) {
//            return   DB::table('noons')->where('post_id', $post_id)->get();
//        });
//
//        $night = Cache()->remember('night-all', 60 * 60 * 24, function () use ($post_id) {
//            return   DB::table('nights')->where('post_id', $post_id)->get();
//        });

   //     $morning = Morning::getAllmorning($post_id);


        $morning_all = sum($post_id, $morning);
        $noon_all = sum($post_id, $noon);
        $night_all = sum($post_id, $night);


        // $morning_calories= Morning::where('post_id',$id)->sum('calories');
        return view('backend.diets.dietgenerator', compact('foods', 'morning', 'noon', 'night', 'morning_all', 'noon_all', 'night_all', 'post_id','column'));


    }



    //Add foods into diets periods
    public function add_foods(Request $request)
    {

        $morning = new Morning();
        $noon = new Noon();
        $night = new Night();

        if ($request->check == "Morning") {
            $morning->post_id = $request->post_id;
            $morning->user_id = 1;
            $morning->food_id = $request->food_id;
            $morning->save();
            notify()->success('Food Successfully Added into Morning.', 'Added');
        }

        else if ($request->check == "noon") {
            $noon->post_id = $request->post_id;
            $noon->user_id = 1;
            $noon->food_id = $request->food_id;
            $noon->save();
            notify()->success('Food Successfully Added into Noon.', 'Added');
        }
        else if ($request->check == "night") {
            $night->post_id = $request->post_id;
            $night->user_id = 1;
            $night->food_id = $request->food_id;
            $night->save();
            notify()->success('Food Successfully Added into Night.', 'Added');
        }

        return redirect()->route('app.diet.generator.show.single','diet_id='.$request->post_id);
    }

    public function updatemealtime(Request $request)
    {
        $time = date('h:i a ', strtotime($request->time));
        if ($request->period == 'morning') {
            $data = Morning::where('post_id', $request->post_id)->get();
            foreach ($data as $row) {
                $row->update([
                    'time' => $time,
                ]);
            }
        } else if ($request->period == 'noon') {
            $data = Noon::where('post_id', $request->post_id)->get();
            foreach ($data as $row) {
                $row->update([
                    'time' => $time,
                ]);
            }
        } else if ($request->period == 'night') {
            $data = Night::where('post_id', $request->post_id)->get();
            foreach ($data as $row) {
                $row->update([
                    'time' => $time,
                ]);
            }
        }


        notify()->success('Time Successfully Added.', 'Added');
        return redirect()->route('app.diet.generator.show.single', $request->post_id);
    }


    //show single diet any user can see
    public function diet_single($id)
    {

        Gate::authorize('app.diet.show.single');

        $post_id = $id;
        $diet = Diet::where('id', $post_id)->first();

        if (Auth::user()->role->slug=='user' && $diet->user_id!=Auth::id())
        {
            notify()->success('No permission to view this link.', 'Added');
            return redirect()->back();
        }
        $morning = Morning::where('post_id', $post_id)->get();
        $noon = Noon::where('post_id', $post_id)->get();
        $night = Night::where('post_id', $post_id)->get();

        $morning_all = sum($post_id, $morning);
        $noon_all = sum($post_id, $noon);
        $night_all = sum($post_id, $night);

        // $morning_calories= Morning::where('post_id',$id)->sum('calories');
        return view('backend.diets.show', compact('diet', 'morning', 'noon', 'night', 'morning_all', 'noon_all', 'night_all', 'post_id'));


    }


    public function create_diet_reports($id)
    {

        Gate::authorize('app.diets.createpdf');
        $post_id = $id;
        $diets = Diet::where('id', $post_id)->first();
        $foods = Food::limit(100)->get();
        $morning = Morning::where('post_id', $post_id)->get();
        $noon = Noon::where('post_id', $post_id)->get();
        $night = Night::where('post_id', $post_id)->get();
        $morning_all = sum($post_id, $morning);
        $noon_all = sum($post_id, $noon);
        $night_all = sum($post_id, $night);

        $morning_time = Morning::where('post_id', $post_id)->pluck('time')->first();
        ini_set('memory_limit', '2048M');
        //    $pdf = PDF::loadView('backend.reports.index',compact('morning','diets'));

        //  return $pdf->download($diets->name.'.pdf');


        return view('backend.reports.index', compact('diets', 'morning', 'noon', 'night', 'morning_all', 'noon_all', 'night_all', 'post_id', 'morning_time'));
    }











//    public function show($id)
//    {
//
//
//        return   Mealtime::where('food_id',$id)->first();
//
//        $mealtime = new Mealtime();
//         $mealtime->post_id=$prepmeal->id;
//        $mealtime->food_id=$id;
//        $mealtime->morning=1;
//        $mealtime->noon=0;
//        $mealtime->afternoon=0;
//        $mealtime->night=0;
//        $mealtime->save();
//        notify()->success('Meal Successfully Added.', 'Added');
//
//
//        return redirect()->route('app.diets.index');
//
//    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        return $request;
    }

    public function destroy($id)
    {

        $morning = Morning::where('id', $id)->first();
        $morning->delete();
        notify()->success("Morning Meal Successfully Deleted", "Deleted");
        return back();
    }

    public function destroy_noon($id)
    {

        $noon = Noon::where('id', $id)->first();
        $noon->delete();
        notify()->success("Noon Meal Successfully Deleted", "Deleted");
        return back();
    }

    public function destroy_night($id)
    {


        $night = Night::where('id', $id)->first();
        $night->delete();
        notify()->success("Night Meal Successfully Deleted", "Deleted");
        return back();
    }

}
