<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Profile\UpdatePasswordRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Controllers\Controller;
use App\Models\Userprofile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        Gate::authorize('app.profile.update');
        $userprofile = Userprofile::where('user_id', Auth::id())->first();
        return view('backend.profile.index', compact('userprofile'));
    }

    public function update(UpdateProfileRequest $request)
    {


        // Get logged in user
        $user = Auth::user();
        $userprofile = Userprofile::where('user_id', Auth::id())->first();
        // Update user info
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        // upload images
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        //get data
        $weight = $request->weight;
        $height = $request->height;
        $age = $request->age;
        $gender = $request->gender;

        //bmi done
        $bmi = bmi($weight, $height);
        $bmi2 = bmi_weight($bmi);
        // Body Fat (BMI method)
        $bodyfat = body_fat($userprofile->age, $bmi);
        //Ponderal Index in KG done
        $pi = pindex($weight, $height);
//        Basal Metabolic Rate (BMR)
        $bmr = bmr($weight, $height, $userprofile->age);
//        Body Surface Area:(Mosteller formula:)
        $bsa = bsa($weight, $height);
        if (empty($userprofile->bmi)) {
            $userprofile->update([
                'user_id' => $userprofile->user_id,
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

            ]);
            // return with success msg
            notify()->success('Profile Successfully Updated.', 'Updated');
            return redirect()->back();
        } else if ($userprofile->weight == $weight && $userprofile->height == $height && $userprofile->age == $age) {
            notify()->warning('Nothing is Update', 'Warning');
            return redirect()->back();
        } else {
            $userprofile->insert([
                'user_id' => $userprofile->user_id,
                'weight' => $weight,
                'height' => $height,
                'age' => $age,
                'gender' => $userprofile->gender,
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
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            // return with success msg
            notify()->success('Profile Successfully inserted.', 'Insert');
            return redirect()->back();

        }




    }

    public function changePassword()
    {
        Gate::authorize('app.profile.password');
        return view('backend.profile.security');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }
}
