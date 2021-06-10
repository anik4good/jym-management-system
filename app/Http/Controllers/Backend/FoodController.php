<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\FoodImport;
use App\Models\Food;
use App\User;
use Carbon\Carbon;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class FoodController extends Controller
{

    public function index(Request $request)
    {
        Gate::authorize('app.foods.index');
        //$foods = Food::getAllFoods();
        // $foods =   DB::table('food')->get();
        //   $foods = Food::paginate(10);


        $table = new Food();

        $foods = $table->where(function ($q) use ($request) {
            if ($request->data) {
                //  $q->where('$request->data', 'LIKE', "%$request->data%");
                $q->whereBetween($request->data, [$request->start, $request->end]);
            }
            else {
                //nothing
            }
        })
            ->paginate(20);


        $column = $table->getTableColumns();
        return view('backend.foods.index', compact('foods', 'request', 'column'));


    }


//    public function index()
//    {
//        Gate::authorize('app.foods.index');
//        $foods = Food::getAllFoods();
//     //   $foods = Food::all();
//        // $foods =   DB::table('food')->get();
//        //   $foods = Food::paginate(10);
//
//
//
//   //      $foods =   DB::table('food')->latest('id')->limit(1000);
//$request=1;
//
//        return view('backend.foods.index', compact('foods','request'));
//
//
//    }


    public function getFoods(Request $request)
    {
        if ($request->ajax()) {
            $data = Food::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('backend.foods.form');
    }


    public function store(Request $request)
    {

        ini_set('memory_limit', '2048M');

        $file = $request->file('file');

        $SurveySheet = new FoodImport();
        Excel::import($SurveySheet, $file);
        return redirect()->route('app.foods.index');

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
