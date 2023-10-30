<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswered extends Model
{
    use HasFactory;
    protected $table = "quizzes_answered"; //tabela
    protected $primaryKey = 'id_quiz_answered'; //chave primaria

    //campos preenchiveis
    protected $fillable = [
        'id_quiz',
        'id_user'
    ];
}
