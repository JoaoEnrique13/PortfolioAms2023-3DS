<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_quiz'; //chave primaria
    
    //campos preenchiveis
    protected $fillable = [
        'id_admin',
        'title',
        'description',
        'img_quiz'
    ];
}
