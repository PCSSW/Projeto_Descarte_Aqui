<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'telefone',
        'tipo',
        'password',
        'endereco_id'
    ];
    

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
        'password' => 'hashed',
    ];

    public function endereco(){
        return $this->hasMany('App/Models/Endereco', 'user_id');
    }

    public function area_de_atuacao(){
        return $this->hasMany('App/Models/Area_de_atuacao', 'user_id');
    }

    public function material(){
        return $this->hasMany('App/Models/Material', 'user_id');
    }

    public function agendamento(){
        return $this->hasMany('App/Models/Agendamento', 'user_id');
    }
    
}
