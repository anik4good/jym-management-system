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
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DietController extends Controller
{

//    public function index()
//    {
//        $foods = Food::limit(100)->get();
//        $morning = Morning::all();
//        $noon = Noon::all();
//      return view('backend.diets.index',compact('foods','morning','noon'));
//    }
//    public function index($id)
//    {
//        $foods = Food::limit(100)->get();
//        $morning = Morning::where('post_id',$id)->get();
//        $noon = Noon::where('post_id',$id)->get();
//
//        return view('backend.diets.index',compact('foods','morning','noon'));
//    }

    public function creatediet($id)
    {

        $user = User::with('userprofile')->where('id', $id)->first();
        return view('backend.diets.create', compact('user'));
    }


    public function store(Request $request)
    {

        $prepmeal = new Diet();
        $prepmeal->user_id = 1;
        $prepmeal->name = $request->name;
        $prepmeal->save();
        Artisan::call('create:meal --calories=' . $request->calories . ' --meals=' . $request->meals . ' --user_id=1 --user_meal_id=' . $prepmeal->id);
        return redirect()->route('app.diet.generator.show.single', $prepmeal->id);

    }

    public function show($id)
    {


        $post_id = $id;
        $foods = Food::limit(100)->get();
        $morning = Morning::where('post_id', $post_id)->get();
        $noon = Noon::where('post_id', $post_id)->get();
        $night = Night::where('post_id', $post_id)->get();
        $morning_all = sum($post_id, $morning);
        $noon_all = sum($post_id, $noon);
        $night_all = sum($post_id, $night);


        // $morning_calories= Morning::where('post_id',$id)->sum('calories');
        return view('backend.diets.dietgenerator', compact('foods', 'morning', 'noon', 'night', 'morning_all', 'noon_all', 'night_all', 'post_id'));


    }

    public function show_post($food_id, $post_id, $check)
    {

        $morning = new Morning();
        $noon = new Noon();
        $night = new Night();

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
        } else if ($check == "night") {
            $night->post_id = $post_id;
            $night->user_id = 1;
            $night->food_id = $food_id;
            $night->save();
        }
        notify()->success('Meal Successfully Added.', 'Added');
        return redirect()->route('app.diet.generator.show.single', $post_id);
    }

    public function updatemealtime(Request $request)
    {
        $time = date('h:i a ', strtotime($request->time));
        if ($request->period == 'morning') {
            $data = Morning::where('post_id', $request->post_id)->get();
            foreach ($data as $row) {
                $data->update([
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

    public function diet_single($id)
    {

        $post_id = $id;
        $foods = Food::limit(100)->get();
        $morning = Morning::where('post_id', $post_id)->get();
        $noon = Noon::where('post_id', $post_id)->get();
        $night = Night::where('post_id', $post_id)->get();

        $morning_all = sum($post_id, $morning);
        $noon_all = sum($post_id, $noon);
        $night_all = sum($post_id, $night);

        // $morning_calories= Morning::where('post_id',$id)->sum('calories');
        return view('backend.diets.show', compact('foods', 'morning', 'noon', 'night', 'morning_all', 'noon_all', 'night_all', 'post_id'));


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
