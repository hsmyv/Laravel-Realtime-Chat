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
        $user = [
            [
                'name'  => 'User 1',
                'email' => 'user1@user.com',
                'password' => bcrypt('password')
            ],
            [
                'name'  => 'User 2',
                'email' => 'user2@user.com',
                'password' => bcrypt('password')
            ],
            [
                'name'  => 'User 3',
                'email' => 'user3@user.com',
                'password' => bcrypt('password')
            ],
        ];

        User::insert($user);
    }
}
