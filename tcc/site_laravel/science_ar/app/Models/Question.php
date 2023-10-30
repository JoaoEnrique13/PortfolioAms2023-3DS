<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_question'; //chave primaria
    public $timestamps = false; //não preenche timestamps

    //campos primarios
    protected $fillable = [
        'id_quiz',
        'text_question'
    ];

    // relacionamento entre answers e questions
    public function answers(){
        return $this->hasMany(Answer::class, 'id_question', 'id_question');
        //hasMany = 1 para muitos
    }
}
