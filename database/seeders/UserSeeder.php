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
                'username'       => 'admin',
                'nama'           => 'Yuhana',
                'jabatan'        => 'Sekretaris Institut',
                'password'       => bcrypt('admin'),
                'isAdmin'        => 1,
                'remember_token' => null,
            ],
             [
                'id'             => 2,
                'username'       => 'user1',
                'nama'           => 'Ahmad',
                'jabatan'        => 'Kepala Unit Pengelolaan dan Pengendalian Program',
                'password'       => bcrypt('user1'),
                'isAdmin'        => 0,
                'remember_token' => null,
            ],
             [
                'id'             => 3,
                'username'       => 'user2',
                'nama'           => 'Budi',
                'jabatan'        => 'Kepala Unit Komunikasi Publik',
                'password'       => bcrypt('user2'),
                'isAdmin'        => 0,
                'remember_token' => null,
            ],
             [
                'id'             => 4,
                'username'       => 'user3',
                'nama'           => 'Ilham',
                'jabatan'        => 'Kepala Unit Layanan Hukum dan Pengelolaan Risiko',
                'password'       => bcrypt('user3'),
                'isAdmin'        => 0,
                'remember_token' => null,
            ],
            [
                'id'             => 5,
                'username'       => 'user4',
                'nama'           => 'Kurniawan',
                'jabatan'        => 'Kepala Subbagian Administrasi Sekretaris Institut',
                'password'       => bcrypt('user4'),
                'isAdmin'        => 0,
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
