<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\User;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Auth;

class CivilController extends Controller
{
    public function perfil(){
        $data = User::find(Auth::user()->id)->select('email', 'id', 'telefone')->get();
        $endereco = Endereco::find($data[0]->id)->get();
        return view('site.civil.perfilCivil', compact('data', 'endereco'));
    }

    public function agendar(Request $request){
        $data = new Agendamento();
        $data->material = $request->input('material');
        $data->dia = $request->input('dia');
        $data->quantidade = $request->input('quantidade');
        $data->horario = $request->input('horario');
        $data->obs = $request->input('obs');
        $data->save();
        return redirect('/');
    }
}
