<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeEmpresa',
        'cnpj',
        'telefoneEmpresa', 
        'enderecoEmpresa', 
    ];
    public function material(){
        return $this->hasMany('App/Models/Material', 'empresa_id');
    }
}
