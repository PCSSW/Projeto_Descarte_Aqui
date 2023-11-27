<?php

namespace App\Http\Controllers;
use App\Models\Agendamento;
use App\Models\User;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\Disponibilidade;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all()->where('tipo', '=', 'Catador');
        return view('site.civil.selecionarCatador', compact('data'));
    }

    public function agendar(Request $request){
        $data = User::all()->where('id', '=', $request->catador);
        $material = Material::all()->where('user_id', '=', $data[1]->id);
        $disponibilidade = Disponibilidade::all()->where('user_id', '=', $data[1]->id);
        return view('site.civil.agendamento', compact('data', 'material', 'disponibilidade'));
    }

    public function salvar(Request $request){
        $data = new Agendamento;
        $data->user_id = Auth::user()->id;
        $data->catador_id = $request->input('catador_id');
        $data->Material = $request->input('material');
        $data->Dia = $request->input('dia');
        $data->Quantidade = $request->input('quantidade');
        $data->Horario = $request->input('horario');
        $data->Obs = $request->input('obs');
        $data->save();
        return redirect('/perfilCivil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
