<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Prepmeal;
use App\Models\Role;
use App\Models\User;
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


        $role = Auth::user()->role->slug;
        $diets = Prepmeal::all();
        $total_diets = Prepmeal::all()->count();


        if (Auth::user()->role->slug == 'user') {
            $user = User::with('userprofile')->where('id', Auth::id())->first();
            return view('backend.dashboard', compact('user', 'role'));
        }

        return view('backend.dashboard', $data, compact('role', 'diets'));
    }

}
