<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index()
    {
        return view('backend.detailsprofile.index');
    }


    public function create()
    {
        return "data";
    }


    public function store(Request $request)
    {
        return $request;
        //get data
        $age = $request->age;
        $weight = $request->weight;
        $height = $request->height;
        $waist = $request->waist;

        //bmi done
        $bmi = bmi($weight,$height);
        $bmi2 = bmi_weight($bmi);
        echo 'bmi: '.$bmi;
        echo '<br>';
        echo 'bmi status: '.$bmi2;
        echo '<br>';

        // Body Fat (BMI method)
        $bodyfat = body_fat($age,$bmi);
        echo ' bodyfat:'.$bodyfat;
        echo '<br>';

        //Ponderal Index in KG done
        $pi = pindex($weight,$height);
        echo ' Ponderal Index:'.$pi;
        echo '<br>';

//        Basal Metabolic Rate (BMR)
     $bmr = bmr($weight,$height,$age);
        echo ' BMR:'.$bmr.' Calories/day';
        echo '<br>';

//        Body Surface Area:(Mosteller formula:)
        $bsa = bsa($weight,$height,$age);
        echo ' BSA:'.$bsa.'m2';
        echo '<br>';





    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
