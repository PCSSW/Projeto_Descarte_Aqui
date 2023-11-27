<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisponibilidadeController extends Controller
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
        return view('site.catador.cadastroDisponibilidade');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Disponibilidade();
        $data->user_id = Auth::user()->id;
        $data->dia = $request->input('dia');
        $data->horario = $request->input('horario');
        $data->save();
        return redirect('/perfilCatador')->with('success', 'Disponibilidade cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disponibilidade $disponibilidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disponibilidade $disponibilidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disponibilidade $disponibilidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disponibilidade $disponibilidade)
    {
        //
    }
}
