<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Rota raíz
Route::get('/', function () {return view ('site.index');})->name('index');

// Páginas informativas
Route::get('/papel', function () {return view('info.papel');})->name('papel');
Route::get('/plastico', function () {return view('info.plastico');})->name('plastico');
Route::get('/vidro', function () {return view('info.vidro');})->name('vidro');
Route::get('/metal', function () {return view('info.metal');})->name('metal');
Route::get('/oleo', function () {return view('info.oleo');})->name('oleo');
Route::get('/organico', function () {return view('info.organico');})->name('organico');

//Rotas autenticadas
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/cadastroEndereco', function () {return view('site.civil.cadastroEndereco');})->name('teste');



Route::middleware(['auth'])->group(function () {
//Rotas Civil
    //Dashboard
    Route::get('/dashboardCivil', function () {return view('site.civil.dashboardCivil');})->name('dashboardCivil');

    //Perfil
    Route::get('/perfilCivil', [\App\Http\Controllers\CivilController::class, 'perfil'])->name('perfilCivil');

    //Endereço
    Route::get('/cadastro/endereco', [App\Http\Controllers\EnderecoController::class, 'create'])->name('novoEndereco');
    Route::post('/endereco', [App\Http\Controllers\EnderecoController::class, 'store'])->name('cadastroEndereco');

    //Outras (ainda falta mexer...)
    Route::get('/historico', function () {return view('site.civil.historico');});
    Route::get('/pesquisarCatador', function () {return view('site.civil.pesquisarCatador');});
    Route::get('/meuPerfil', function () {return view('site.perfil');});
    Route::get('/verHistorico', function () {return view('site.civil.verHistorico');});
    Route::get('/agendamento', [App\Http\Controllers\AgendamentoController::class, 'index'])->name('agendamento');
    Route::post('/agendamento/agendar', [App\Http\Controllers\AgendamentoController::class, 'agendar']);
    Route::post('/agendamento/salvar', [App\Http\Controllers\AgendamentoController::class, 'salvar']);
    Route::get('/cadastroCivil', function () {return view('auth.cadastroCivil');});
    Route::get('/cadastroCatador', function () {return view('auth.cadastroCatador');});
    Route::get('/continuarCadastro', function () {return view('auth.continuarCadastro');});
    Route::get('/avaliar', function () {return view('site.civil.avaliar');});
    Route::get('/teste', function() {return view('site.catador.cadastroAreadeAtuacao');});

//Rotas Catador
    //Dashboard
    Route::get('/dashboardCatador', function () {return view('site.catador.dashboardCatador');})->name('dashboardCatador');

    //Perfil
    Route::get('/perfilCatador', [App\Http\Controllers\CatadorController::class, 'perfil'])->name('perfilCatador');

    //Area de atuação
    Route::get('/cadastro/areaDeAtuacao', [App\Http\Controllers\AreaDeAtuacaoController::class, 'create'])->name('novaAreaDeAtuacao');
    Route::post('/areaDeAtuacao', [App\Http\Controllers\AreaDeAtuacaoController::class, 'store'])->name('cadastroAreaDeAtuacao');

    //Materiais
    Route::get('/cadastro/material', [App\Http\Controllers\MaterialController::class, 'create'])->name('novoMaterial');
    Route::post('/material', [App\Http\Controllers\MaterialController::class, 'store'])->name('cadastroMaterial');

    //Disponibilidade
    Route::get('/cadastro/disponibilidade', [App\Http\Controllers\DisponibilidadeController::class, 'create'])->name('novaDisponibilidade');
    Route::post('disponibilidade', [App\Http\Controllers\DisponibilidadeController::class, 'store'])->name('cadastroDisponibilidade');
});