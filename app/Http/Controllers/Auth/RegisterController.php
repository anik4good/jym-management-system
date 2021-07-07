<?php

namespace App\Http\Controllers\Auth;

use App\Models\Query;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Userprofile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;
    /**
     * Create a new controller instance.
     *
     * @return string
     */


    public function redirectTo()
    {
        if (empty(Auth::user()->userprofile->age)) {
            return $this->redirectTo = '/app/dashboard';
        } else {
            return $this->redirectTo = '/app/dashboard';
        }
    }
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $user =  User::create([
            'role_id' => Role::where('slug','user')->first()->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $query = Query::where('email',$data['email'])->first();
        Userprofile::create([
            'user_id' => $user->id,
            'weight' => $query->weight,
            'height' => $query->height,
            'age' =>$query->age,
            'gender' =>$query->gender,
            'necksize' => $query->necksize,
            'dietrestrictions' => $query->dietrestrictions,
            'waist' => $query->waist,
            'bodyshape' =>$query->bodyshape,
            'lifestylehabit' => $query->lifestylehabit,
            'bloodpresure' => $query->bloodpresure,
            'bloodsugar' => $query->bloodsugar,
            'foodhabit' => $query->foodhabit,
            'targetfitness' => $query->targetfitness,
            'bmi' => $query->bmi,
            'ponderalindex' => $query->ponderalindex,
            'bodyfat' => $query->bodyfat,
            'bmr' => $query->bmr,
            'bsa' => $query->bsa,
            'created_at' => Carbon::now()
        ]);

return  $user;
    }
}
