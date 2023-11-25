<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = [
        'cidade',
        'user_id',
        'uf',
        'rua',
        'numero',
        'bairro',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    
}
