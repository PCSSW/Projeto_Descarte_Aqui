<?php

use Illuminate\Support\Facades\Route;

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




Route::middleware(['auth'])->group(function () {
    Route::get('/historico', function () {return view('site.civil.historico');});
    Route::get('/pesquisarCatador', function () {return view('site.civil.pesquisarCatador');});
    Route::get('/perfilCatador', function () {return view('site.perfilCatador');});
    Route::get('/meuPerfil', function () {return view('site.perfil');});
    Route::get('/verHistorico', function () {return view('site.civil.verHistorico');});
    Route::get('/agendamento', function () {return view('site.civil.agendamento');});
    Route::get('/cadastroCivil', function () {return view('auth.cadastroCivil');});
    Route::get('/cadastroCatador', function () {return view('auth.cadastroCatador');});
    Route::get('/continuarCadastro', function () {return view('auth.continuarCadastro');});
    Route::get('/avaliar', function () {return view('site.civil.avaliar');});
    Route::get('/dashboardCatador', function () {return view('site.catador.dashboardCatador');})->name('dashboardCatador');
    Route::get('/dashboardCivil', function () {return view('site.civil.dashboardCivil');})->name('dashboardCivil');
});