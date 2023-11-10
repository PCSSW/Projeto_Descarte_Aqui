<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'horario', 
        'dia', 
        'avaliacao',
        'civil_id',
        'catador_id',
        'material_id'
    ];
    public function civil(){
        return $this->belongsTo('App/Models/Civil');
    }
    public function catador(){
        return $this->belongsTo('App/Models/Catador');
    }
    public function material(){
        return $this->belongsTo('App/Models/Material');
    }
}
