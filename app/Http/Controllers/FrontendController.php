<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


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
}
