<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_answer'; //chave primaria
    public $timestamps = false; //não preenche timestamps
    
    //campos preenchiveis
    protected $fillable = [
        'id_question',
        'text_answer',
        'correct'
    ];
}
