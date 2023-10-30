<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswered extends Model
{
    use HasFactory;
    protected $table = "questions_answered"; //tabela
    protected $primaryKey = 'id_question_answered'; //chave primaria
    public $timestamps = false; //não preenche timestamps

    //campos preenchiveis
    protected $fillable = [
        'id_quiz_answered',
        'id_answer'
    ];
}
