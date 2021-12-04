<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $users = [
            [
                'id'             => 1,
                'username'       => 'Admin',
                'name'           => 'admin',
                'password'       => bcrypt('Admin'),
                'isAdmin'        => 1,
                'remember_token' => null,
            ],
            // [
            //     'id'             => 2,
            //     'name'           => 'Organizer',
            //     'email'          => 'organizer@tryout.com',
            //     'password'       => bcrypt('password'),
            //     'remember_token' => null,
            // ],
            // [
            //     'id'             => 3,
            //     'name'           => 'Participant',
            //     'email'          => 'participant@tryout.com',
            //     'email_verified_at' => now(),
            //     'password'       => bcrypt('password'),
            //     'remember_token' => null,
            // ],
        ];

        User::insert($users);

    }
}
