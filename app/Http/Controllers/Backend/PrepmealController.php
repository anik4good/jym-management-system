<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Mealtime;
use App\Models\Morning;
use App\Models\Noon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PrepmealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $foods = Food::limit(100)->get();
        $morning = Morning::all();
        $noon = Noon::all();
      return view('backend.meals.index',compact('foods','morning','noon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // start the backup process
        Artisan::call('create:meal');

       // notify()->success('Backup Created Successfully.', 'Added');
       // return redirect()->route('app.meals.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        return 'done';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return   Mealtime::where('food_id',$id)->first();

        $mealtime = new Mealtime();
         $mealtime->post_id=$prepmeal->id;
        $mealtime->food_id=$id;
        $mealtime->morning=1;
        $mealtime->noon=0;
        $mealtime->afternoon=0;
        $mealtime->night=0;
        $mealtime->save();
        notify()->success('Meal Successfully Added.', 'Added');


        return redirect()->route('app.meals.index');

    }


    public function show_post($food_id,$post_id,$check){

     //   return $time;

        $morning = new Morning();
        $noon = new Noon();

        if ($check=="Morning")
        {
            $morning->post_id=$post_id;
            $morning->user_id=1;
            $morning->food_id=$food_id;
            $morning->save();
        }
        else if ($check=="Noon")
        {
            $noon->post_id=$post_id;
            $noon->user_id=1;
            $noon->food_id=$food_id;
            $noon->save();
        }

        notify()->success('Meal Successfully Added.', 'Added');
        return redirect()->route('app.meals.index');
    }

    public function updatetime($id)
    {
        $morning = Morning::where('post_id',$id)->get();
        $noon = Noon::where('post_id',$id)->get();
      return view('backend.meals.time',compact('morning','noon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return  $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
