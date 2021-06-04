<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Userprofile;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        Gate::authorize('app.users.index');
        $users = User::getAllUsers();
        return view('backend.users.index',compact('users'));
    }


    public function create()
    {
        Gate::authorize('app.users.create');
        $roles = Role::getForSelect();
        return view('backend.users.form', compact('roles'));
    }


    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->filled('status'),
        ]);
        // upload images
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('app.users.index');
    }


    public function show(User $user)
    {
        return view('backend.users.show',compact('user'));
    }


    public function edit(User $user)
    {
        Gate::authorize('app.users.edit');
        $user = User::with('userprofile')->where('id', $user->id)->first();
        $roles = Role::all();

        return view('backend.users.form', compact('roles','user'));
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $userprofile = Userprofile::where('user_id',$user->id)->first();
        $user->update([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'status' => $request->filled('status'),
        ]);
        // upload images
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }



        //get data
        $weight = $request->weight;
        $height = $request->height;

        //bmi done
        $bmi = bmi($weight,$height);
        $bmi2 = bmi_weight($bmi);

        // Body Fat (BMI method)
        $bodyfat = body_fat($userprofile->age,$bmi);
        //Ponderal Index in KG done
        $pi = pindex($weight,$height);
//        Basal Metabolic Rate (BMR)
        $bmr = bmr($weight,$height,$userprofile->age);
//        Body Surface Area:(Mosteller formula:)
        $bsa = bsa($weight,$height,$userprofile->age);

        $userprofile->update([
            'user_id' => $user->id,
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmi,
            'ponderalindex' => $pi,
            'bodyfat' => $bodyfat,
            'bmr' => $bmr,
            'bsa' => $bsa,
        ]);


        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('app.users.index');
    }


    public function destroy(User $user)
    {
        Gate::authorize('app.users.destroy');
        $user->delete();
        notify()->success("User Successfully Deleted", "Deleted");
        return back();
    }
}
