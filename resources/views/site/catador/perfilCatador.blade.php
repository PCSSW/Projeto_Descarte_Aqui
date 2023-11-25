@extends('layouts.app')
@extends('site.catador.layoutCatador')

@section('content')
<div class="container mt-5 pt-5">
    
    <div class="row" style="display: flex; justify-content: center">
        <div class="col ms-5">
            <img src="{{asset('storage/images/catador.png')}}" alt="">
        </div>
        <div class="col mt-5" style="font-size: x-large; font-weight: bold;">
            <p>{{Auth::user()->name}}</p>
        </div>
        <div class="col mt-5">
            
        </div>
    </div>
    <div class="row mt-5">
        <h2 class="ms-5">Dados:</h2>
        <div class="col" style="display: flex; justify-content: center">
            <div class="alert" style="background-color: #B9E66F;height: 12rem; width: 60%">
                <h4 style="font-size: x-large; font-weight: bold;">Informações:</h4>
                <p>E-mail: {{$data[0]->email}}</p>
                <p>Telefone: {{$data[0]->telefone}}</p>
                <p>Área de atuação: {{$area[0]->regiao.', '.$area[0]->bairro }}</p>
                <p>Materiais de interesse: {{$material[0]->material.'('.$material[0]->tipo_material.')'}} </p>
            </div>
        </div>      
    </div>
</div>
@endsection