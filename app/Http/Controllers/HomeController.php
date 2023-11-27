<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Exception;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->tipo == 'Civil') {
            try{
                $data = Agendamento::all()->where('user_id', '=', Auth::user()->id);
            }catch(Exception $error){
                return view('site.civil.dashboardCivil');
            }
            return view('site.civil.dashboardCivil', compact('data'));
        }
        else if(Auth::user()->tipo == 'Catador') {
            try{
                $data = Agendamento::all()->where('catador_id', '=', Auth::user()->id);
            }catch(Exception $error){
                return view('site.catador.dashboardCatador');
            }
            return view('site.catador.dashboardCatador', compact('data'));
        }
        else {
            return redirect('auth.register')->with('danger', 'Valor inválido!');
        }
        
    }
}
