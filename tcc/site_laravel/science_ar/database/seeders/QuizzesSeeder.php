<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::create([
            'id_admin' => 1,
            'title' => 'Aprenda Física',
            'description' => 'Física legal',
            'img_quiz' => '../img/img_quiz/1.jpg',
        ]);

        Quiz::create([
            'id_admin' => 2,
            'title' => 'Matemática Básica',
            'description' => 'Aprenda contas básicas de soma',
            'img_quiz' => '../img/img_quiz/2.jpg'
        ]);
    }
}
