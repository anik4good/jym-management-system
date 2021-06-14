<?php

namespace App\Http\Controllers\Backend;

use App\Models\Food;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Diet;
use App\Models\Role;
use App\Models\User;
use App\Models\Userprofile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $start = Carbon::now()->subMonth()->startOfMonth()->startOfMonth()->startOfDay()->format('Y-m-d H:i:s');
        $end = Carbon::now()->subMonth()->startOfMonth()->endOfMonth()->endOfDay()->format('Y-m-d H:i:s');
        $data['usersCount'] = User::count();
        $data['rolesCount'] = Role::count();
        $data['pagesCount'] = Page::count();
        $data['menusCount'] = Menu::count();
        $data['users'] = User::orderBy('last_login_at', 'desc')->take(10)->get();
        $data['users_this_month'] = user_this_month();
        $data['users_last_month'] =user_last_month();
        $data['total_foods'] = Food::count();


        $role = Auth::user()->role->slug;
        $diets = Diet::all();
        $total_diets = Diet::all()->count();


        if (Auth::user()->role->slug == 'user') {
            $user = User::with('userprofile')->where('id', Auth::id())->first();
            $user_all = Userprofile::where('user_id', Auth::id())->latest()->get();


            return view('backend.dashboard', compact('user', 'role','user_all'));
        }

        return view('backend.dashboard', $data, compact('role', 'diets'));
    }

}
