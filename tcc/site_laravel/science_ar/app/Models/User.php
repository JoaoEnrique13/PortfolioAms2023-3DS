<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Admin;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //campos preenchiveis
    protected $fillable = [
        'name',
        'email',
        'password',
        'img',
    ];

    protected $primaryKey = 'id'; //chave primaria

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Verifica se é admin
    public function isAdmin(){
        $admin = Admin::where('id_user', auth()->user()->id)->get()->count(); //seleciona admin com id do usuario logado

        // 1 = admin
        // 0 = aluno
        return $admin;
    }

    // Enviar email de redefinição de senha
    public function sendPasswordResetNotification($token){
        $this->notify(new \App\Notifications\ResetPasswordNotification($token));
    }
}
