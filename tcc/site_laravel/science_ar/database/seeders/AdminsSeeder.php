<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'id_user' => 1,
        ]);

        Admin::create([
            'id_user' => 2,
        ]);

        Admin::create([
            'id_user' => 3,
        ]);
    }
}
