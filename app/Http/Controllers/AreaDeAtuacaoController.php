<?php

namespace App\Http\Controllers;

use App\Models\Area_de_atuacao;
use Illuminate\Http\Request;

class AreaDeAtuacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.catador.cadastroAreadeAtuacao');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Area_de_Atuacao();
        $data->regiao = $request->input('regiao');
        $data->bairro = $request->input('bairro');
        $data->descricao = $request->input('descricao');
        $data->save();
        return redirect('/perfilCatador')->with('success', 'Area de atuação cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area_de_atuacao $area_de_atuacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area_de_atuacao $area_de_atuacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area_de_atuacao $area_de_atuacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area_de_atuacao $area_de_atuacao)
    {
        //
    }
}
