<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_admin'; //chave primaria
    protected $fillable = ['id_user']; //fk
    public $timestamps = false; //não preenche timestamps
}
