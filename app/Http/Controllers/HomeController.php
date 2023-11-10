<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\User_Servico;
use App\Models\Candidatos;
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
            return view('site.civil.dashboardCivil');
        }
        else if(Auth::user()->tipo == 'Catador') {
            return view('site.catador.dashboardCatador');
        }
        else {
            return redirect('auth.register')->with('danger', 'Valor inválido!');
        }
        
    }
}
