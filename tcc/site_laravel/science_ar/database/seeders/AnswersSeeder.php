<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Question 1
        Answer::create([
            'id_question' => 2,
            'text_answer' => '9.8 m/s',
            'correct' => 1,
        ]);

        Answer::create([
            'id_question' => 2,
            'text_answer' => '9.9 m/s',
            'correct' => 0,
        ]);

        //Question 2
        Answer::create([
            'id_question' => 3,
            'text_answer' => '1925',
            'correct' => 0,
        ]);

        Answer::create([
            'id_question' => 3,
            'text_answer' => '1915',
            'correct' => 1,
        ]);

        //Question 3
        Answer::create([
            'id_question' => 4,
            'text_answer' => '2',
            'correct' => 1,
        ]);

        Answer::create([
            'id_question' => 4,
            'text_answer' => '5',
            'correct' => 0,
        ]);

        //Question 4
        Answer::create([
            'id_question' => 5,
            'text_answer' => '8',
            'correct' => 1,
        ]);

        Answer::create([
            'id_question' => 5,
            'text_answer' => '9',
            'correct' => 0,
        ]);
    }
}
