<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Quiz 1
        Question::create([
            'id_quiz' => 1,
            'text_question' => 'Qual a gravidade da Terra?',
        ]);

        Question::create([
            'id_quiz' => 1,
            'text_question' => 'Quando Albert Einstein publicou a Teoria da Relatividade Geral?',
        ]);


        //Quiz 2
        Question::create([
            'id_quiz' => 2,
            'text_question' => 'Quanto é 1 + 1?',
        ]);

        Question::create([
            'id_quiz' => 2,
            'text_question' => 'Quanto é 5 + 3?',
        ]);
    }
}
