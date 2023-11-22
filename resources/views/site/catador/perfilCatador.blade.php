@extends('layouts.app')
@extends('site.catador.layoutCatador')

@section('content')
<div class="container mt-5 pt-5">
    
    <div class="row" style="display: flex; justify-content: center">
        <div class="col ms-5">
            <img src="{{asset('storage/imagens/catador.png')}}" alt="">
        </div>
        <div class="col mt-5" style="font-size: x-large; font-weight: bold;">
            <p>{{Auth::user()->name}}</p>
        </div>
        <div class="col mt-5">
            <a href="#Em andamento...">
                <button type="button" class="btn btn-primary">Editar</button>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <h2 class="ms-5">Dados:</h2>
        <div class="col" style="display: flex; justify-content: center">
            <div class="alert" style="background-color: #B9E66F;height: 12rem; width: 60%">
                <h4 style="font-size: x-large; font-weight: bold;">Informações:</h4>
                <p>E-mail: {{Auth::user()->email}}</p>
                <p>Telefone: {{Auth::user()->telefone }}</p>
                <p>Área de atuação: </p>
                <p>Materiais de interesse: </p>
            </div>
        </div>      
    </div>
</div>
@endsection