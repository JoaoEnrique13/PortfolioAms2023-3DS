<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // ADMIN
         User::create([
            'name' => 'Science AR',
            'email' => 'sciencear@gmail.com',
            'password' => bcrypt('1234'),
            'img' => 'img/img_account/1.gif'
        ]);

        // ADMIN
        User::create([
            'name' => 'João Enrique',
            'email' => 'joao@gmail.com',
            'password' => bcrypt('1234'),
            'img' => 'img/img_account/2.png'
        ]);

        // ADMIN
        User::create([
            'name' => 'Júlia',
            'email' => 'julia@gmail.com',
            'password' => bcrypt('1234'),
            'img' => 'img/img_account/img_account.png'
        ]);

        // STUDENT
        User::create([
            'name' => 'Sarah',
            'email' => 'sarah@gmail.com',
            'password' => bcrypt('1234'),
            'img' => 'img/img_account/img_account.png'
        ]);

        // STUDENT
        User::create([
            'name' => 'José',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('1234'),
            'img' => 'img/img_account/img_account.png'
        ]);
    }
}
