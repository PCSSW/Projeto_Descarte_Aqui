@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col">
            <img src="{{asset('storage/imagens/nopicture.png')}}" alt="">
        </div>
        <div class="col" style="font-size: x-large; font-weight: bold;">
            {{Auth:user->name}}
        </div>
        <div class="col mt-2">
            ⭐⭐⭐⭐⭐
        </div>
        <div class="col mt-1">
            <a href="/agendamento">
                <button type="button" class="btn btn-primary">Agendar</button>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="alert" style="background-color: #B9E66F;height: 12rem; width: 90%">
                <h4 style="font-size: x-large; font-weight: bold;">Disponibilidade Semanal:</h4>
                <p>Dias: segunda-feira, terça-feira,quarta-feira, quinta-feira,sexta-feira</p>
                <p>Horário: 9:00 às 17:00</p>
            </div>
        </div>
        <div class="col">
            <div class="alert" style="background-color: #B9E66F;height: 12rem; width: 90%">
                <h4 style="font-size: x-large; font-weight: bold;">Dados:</h4>
                <p>Telefone: (35) 99999-9999</p>
                <p>E-mail: cefet@cefetmg.com</p>
                <p>Material de interesse: papel, metal e vidro</p>
            </div>
        </div>      
    </div>
</div>
@endsection