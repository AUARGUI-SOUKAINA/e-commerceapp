<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@compte.com',
               'type'=>1,
               'password'=> '12345678',
            ],
            [
               'name'=>'client User',
               'email'=>'client@compte.com',
               'type'=> 2,
               'password'=> '12345678',
            ],
            [
               'name'=>'User',
               'email'=>'user@compte.com',
               'type'=>0,
               'password'=> '12345678',
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }

}
