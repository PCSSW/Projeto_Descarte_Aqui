<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Endereco extends Model
{
    use HasFactory;
    protected $fillable = [
        "cidade",
        "uf",
        "rua",
        "numero",
        "bairro",
    ];
}
