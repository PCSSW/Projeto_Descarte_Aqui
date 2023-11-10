<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civil extends Model
{
        use HasFactory;
        protected $fillable = [
        'nomeCivil',
        'emailCivil',
        'passwordCivil', 
        'enderecoCivil', 
        'telefoneCivil'
    ];
    public function agendamento(){
        return $this->hasMany('App/Models/Agendamento', 'civil_id');
    }
    public function material(){
        return $this->hasMany('App/Models/Material', 'civil_id');
    }
}

