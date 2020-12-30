<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([

        'username'  => 'Sumaya Akter',
        'email'  => '17103047iubat@gmail.com',
        'password'  => bcrypt('sumaya25'),
        'role'=>'admin',
        'address'=>'Tongi',
        'contact'=>'01770146179',
       ]);
    }
}
