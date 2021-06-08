<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\FoodImport;
use App\Models\Food;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class FoodController extends Controller
{

    public function index()
    {
         $foods = Food::getAllFoods();
//        $foods = Cache()->remember('food-all', 60 * 60 * 24, function () {
//            return Food::all();
//        });


        return view('backend.foods.index', compact('foods'));

        //return view('backend.foods.food');
    }


    public function getFoods(Request $request)
    {
        if ($request->ajax()) {
            $data = Food::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        ini_set('memory_limit', '2048M');

        $file = $request->file('file');

        $SurveySheet = new FoodImport();
        Excel::import($SurveySheet, $file);
        return redirect()->back();

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
