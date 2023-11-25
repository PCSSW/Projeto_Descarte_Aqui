<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'material',
        'tipo_material',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
