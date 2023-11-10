<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeCatador',
        'emailCatador',
        'passwordCatador', 
        'localAtuacao', 
        'telefoneCatador', 
        'disponibilidade_id'
    ];
    public function agendamento(){
        return $this->hasMany('App/Models/Agendamento', 'catador_id');
    }
    public function material(){
        return $this->hasMany('App/Models/Material', 'catador_id');
    }
    public function disponibilidade(){
        return $this->belongsTo('App/Models/Disponibilidade');
    }
}
