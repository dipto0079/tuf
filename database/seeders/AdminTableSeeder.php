<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('admins')->delete();
        \DB::table('admins')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Mr. Admin',
                    'username' => 'admin',
                    'email' => 'admin@email.com',
                    'email_verified' => 1,
                    'email_verified_at' => Carbon::now(),
                    'password' => Hash::make(123456),
                    'profile_photo_path' => NULL,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                )
        ));

    }
}
