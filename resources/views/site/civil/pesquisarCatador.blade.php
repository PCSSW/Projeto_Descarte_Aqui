@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col">
            <a href="/#" style="color: black; text-decoration: none">
            <div class="alert" style="background-color: #B9E66F;height: 13rem;">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('storage/imagens/nopicture.png')}}" alt="">
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <h1 style="font-weight: bold ">Luis Paulo</h1>
                            <p>⭐⭐⭐</p>
                        </div>
                        <p>Materiais: Papel, Orgânico...</p>
                        <p>Disponíveis: Sexta 9:00 às 13:00</p>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col">
            <a href="/perfilCatador" style="color: black; text-decoration: none">
            <div class="alert" style="background-color: #B9E66F;height: 13rem;">
                <div class="row">
                    <div class="col">
                                    <img src="{{asset('storage/imagens/nopicture.png')}}" alt="">

                    </div>
                    <div class="col">
                        <div class="text-center">
                            <h1 style="font-weight: bold ">Magnólia</h1>
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <p>Materiais: Papel, Plástico...</p>
                        <p>Disponíveis: Sexta 9:00 às 17:00</p>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/#" style="color: black; text-decoration: none">
            <div class="alert" style="background-color: #B9E66F;height: 13rem;">
                <div class="row">
                    <div class="col">
                                    <img src="{{asset('storage/imagens/nopicture.png')}}" alt="">

                    </div>
                    <div class="col">
                        <div class="text-center">
                            <h1 style="font-weight: bold ">Luiz Pedro</h1>
                            <p>⭐⭐⭐</p>
                        </div>
                        <p>Materiais: Papel, Metal...</p>
                        <p>Disponíveis: Sexta 9:00 às 13:00</p>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="/#" style="color: black; text-decoration: none">
            <div class="alert" style="background-color: #B9E66F;height: 13rem;">
                <div class="row">
                    <div class="col">
                                    <img src="{{asset('storage/imagens/nopicture.png')}}" alt="">

                    </div>
                    <div class="col">
                        <div class="text-center">
                            <h1 style="font-weight: bold ">Carlos Manoel</h1>
                            <p>⭐⭐⭐</p>
                        </div>
                        <p>Materiais: Papel, Óleo...</p>
                        <p>Disponíveis: Quarta e Sexta 8:00 às 16:00</p>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
@endsection