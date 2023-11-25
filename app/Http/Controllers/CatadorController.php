<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Area_de_atuacao;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;

class CatadorController extends Controller
{
    public function perfil(){
        $data = User::find(Auth::user()->id)->select('email', 'id', 'telefone')->get();
        $area = Area_de_atuacao::find($data[0]->id)->get();
        $material = Material::find($data[0]->id)->get();
        return view('site.catador.perfilCatador', compact('data', 'area', 'material'));
    }
    
}
