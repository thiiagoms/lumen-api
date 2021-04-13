<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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

        $users = [
            [
                'email' => 'adminapi@gmail.com',
                'password' => 'adminapi',
            ],
            [
                'email' => 'lumenapi@hotmail.com',
                'password' => 'lumenapi'
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
