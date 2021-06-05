<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Userprofile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('slug','admin')->first();
        // Create admin
        User::updateOrCreate([
            'role_id' => $adminRole->id,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'status' => true
        ]);

        // Create user
        $userRole = Role::where('slug','user')->first();
        User::updateOrCreate([
            'role_id' => $userRole->id,
            'name' => 'Jone Doe',
            'email' => 'user@mail.com',
            'password' => Hash::make('password'),
            'status' => true
        ]);


        // Create user Profile Male
        Userprofile::updateOrCreate([
            'user_id' => 1,
            'gender' => 'Male',
            'height' => '160',
            'weight' => '62',
            'age' => '25',
            'necksize' => '35',
            'waist' => '34',
        ]);

        // Create user Profile Female
        Userprofile::updateOrCreate([
            'user_id' => 2,
            'gender' => 'Female',
            'height' => '150',
            'weight' => '56',
            'age' => '22',
            'necksize' => '35',
            'waist' => '34',
        ]);

    }
}
