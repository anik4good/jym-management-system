<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Query;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {

        return view('frontend.home');
    }


    public function form()
    {

        return view('frontend.form');
    }

    public function form_store(Request $request)
    {

        $email =  $request->email;
        //get data
        $weight = $request->weight;
        //convert feet to cm
        $cm = 2.54 * ($request->feet * 12 + $request->inch);
        $height = $cm;
        $age = $request->age;
        $gender = $request->gender;

        //bmi done
        $bmi = bmi($weight, $height);
        $bmi2 = bmi_weight($bmi);
        // Body Fat (BMI method)
        $bodyfat = body_fat($request->age, $bmi);
        //Ponderal Index in KG done
        $pi = pindex($weight, $height);
//        Basal Metabolic Rate (BMR)
        $bmr = bmr($weight, $height, $request->age);
//        Body Surface Area:(Mosteller formula:)
        $bsa = bsa($weight, $height);

        $query = new Query();

        $query->insert([
            'email' => $email,
            'weight' => $weight,
            'height' => $height,
            'age' => $age,
            'gender' => $gender,
            'necksize' => $request->necksize,
            'dietrestrictions' => $request->dietrestrictions,
            'waist' => $request->waist,
            'bodyshape' => $request->bodyshape,
            'lifestylehabit' => $request->lifestylehabit,
            'bloodpresure' => $request->bloodpresure,
            'bloodsugar' => $request->bloodsugar,
            'foodhabit' => $request->foodhabit,
            'targetfitness' => $request->targetfitness,
            'bmi' => $bmi,
            'ponderalindex' => $pi,
            'bodyfat' => $bodyfat,
            'bmr' => $bmr,
            'bsa' => $bsa,
            'created_at' => Carbon::now()

        ]);

        // return with success msg
        notify()->success('Profile Successfully inserted.', 'Insert');
        return view('auth.register',compact('email'));
    //    return redirect()->route('register',compact('email'));

    }


}
