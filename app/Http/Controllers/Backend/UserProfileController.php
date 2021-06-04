<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.detailsprofile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return "data";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return float
     */
    public function store(Request $request)
    {
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


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
