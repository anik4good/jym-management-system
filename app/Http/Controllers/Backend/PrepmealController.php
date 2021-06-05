<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Mealtime;
use App\Models\Morning;
use App\Models\Noon;
use App\Models\Prepmeal;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PrepmealController extends Controller
{

//    public function index()
//    {
//        $foods = Food::limit(100)->get();
//        $morning = Morning::all();
//        $noon = Noon::all();
//      return view('backend.meals.index',compact('foods','morning','noon'));
//    }
//    public function index($id)
//    {
//        $foods = Food::limit(100)->get();
//        $morning = Morning::where('post_id',$id)->get();
//        $noon = Noon::where('post_id',$id)->get();
//
//        return view('backend.meals.index',compact('foods','morning','noon'));
//    }

    public function index2($id)
    {

        $post_id = $id;
        $foods = Food::limit(100)->get();
        $morning = Morning::where('post_id', $post_id)->get();
        $noon = Noon::where('post_id', $post_id)->get();

        $morning_all = sum($post_id, $morning);
        $noon_all = sum($post_id, $noon);

        // $morning_calories= Morning::where('post_id',$id)->sum('calories');
        return view('backend.meals.index', compact('foods', 'morning', 'noon', 'morning_all', 'noon_all', 'post_id'));


    }


    public function create($id)
    {
        return view('backend.meals.create',);
    }


    public function createmeal($id)
    {

        $user = User::with('userprofile')->where('id', $id)->first();
        return view('backend.meals.create', compact('user'));
    }


    public function store(Request $request)
    {

        //        $data = User::with('prepmails')->get();
//        dd($data);
        // start the backup process
        $prepmeal = new Prepmeal();
        $prepmeal->user_id = 1;
        $prepmeal->save();
        Artisan::call('create:meal --calories=' . $request->calories . ' --meals=' . $request->meals . ' --user_id=1 --user_meal_id=' . $prepmeal->id);
        //$this->index($prepmeal->id);
        return redirect()->route('app.meals.show.single', $prepmeal->id);
        //return redirect()->route('app.meals.index');

        // notify()->success('Backup Created Successfully.', 'Added');
        // return redirect()->route('app.meals.index');
    }


    public function updatemealtime(Request $request)
    {


        $time = date('h:i a ', strtotime($request->time));

        $mornings = Morning::where('post_id', $request->post_id)->get();
        foreach ($mornings as $morning) {
            $morning->update([
                'time' => $time,
            ]);
        }

        notify()->success('Time Successfully Added.', 'Added');
        return redirect()->route('app.meals.show.single', $request->post_id);
    }

    public function show_post($food_id, $post_id, $check)
    {

        $morning = new Morning();
        $noon = new Noon();

        if ($check == "Morning") {
            $morning->post_id = $post_id;
            $morning->user_id = 1;
            $morning->food_id = $food_id;
            $morning->save();
        } else if ($check == "Noon") {
            $noon->post_id = $post_id;
            $noon->user_id = 1;
            $noon->food_id = $food_id;
            $noon->save();
        }
        notify()->success('Meal Successfully Added.', 'Added');
        return redirect()->route('app.meals.show.single', $post_id);
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
//        return redirect()->route('app.meals.index');
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
        notify()->success("Meal Successfully Deleted", "Deleted");
        return back();
    }
}
