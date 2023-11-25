@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<!-- Sem a utilização do register -->
<div>
    <a href="{{route('index')}}">
      <img src="{{asset('public/images/logo.png')}}" alt="">
      <a class="navbar-brand" href="/" style="font-size: xx-large; font-weight: bold; color: black; text-decoration: none">Descarte Aqui</a>
    </a>
  </div>
  <div>
      <a class="navbar-brand" href="{{route('login')}}">Login</a>
      <a class="navbar-brand" href="{{route('register')}}">Cadastrar</a>
  </div>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-sm-4">
            <div class="p-3 m-0 border-0 bd-example mt-3 border-0">  
                <div class="card text-bg rounded-4 p-3" style="width: 100%; background-color: #B9E66F">
                    <svg class="rounded-4" width="100%" height="635" style="background-color: #DDF5B6;">
                    </svg>
                    <div class="card-img-overlay text-dark p-4">
                        <h5 class="card-title mb-4" style="font-weight: bold; font-size: 1.5rem">Proximos Agendamentos</h5>
                        <p class="card-text">
                            Serão listados aqui:<br>
                            <ul>
                                <li>
                                    Agendamento1: XXXXXXXX<br><br><br>
                                </li>
                                <li>
                                    Agendamento2: XXXXXXXX<br><br><br>
                                </li>
                                <li>
                                    Agendamento3: XXXXXXXX<br><br><br>
                                </li>
                                <li>
                                    Agendamento4: XXXXXXXX<br><br><br>
                                </li>
                                <li>
                                    Agendamento5: XXXXXXXX<br><br><br>
                                </li>
                                <li>
                                    Agendamento6: XXXXXXXX<br><br><br>
                                </li>
                                <li>
                                    Agendamento7: XXXXXXXX<br><br><br>
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col sm-8">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 1rem">
                <a href="{{route('papel')}}" style="text-decoration: none">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                                <img src="{{asset('storage/images/papel.png')}}" alt="">
                            </div>
                            <div class="fundo" style=""></div>
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">PAPEL</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('plastico')}}" style="text-decoration: none">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                                <img src="{{asset('storage/images/plastico.png')}}" alt="">
                            </div>
                            <div class="fundo" style=""></div>
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">PLÁSTICO</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('vidro')}}" style="text-decoration: none">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                                <img src="{{asset('storage/images/vidro.png')}}" alt="">
                            </div>
                            <div class="fundo" style=""></div>
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">VIDRO</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('metal')}}" style="text-decoration: none">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                                <img src="{{asset('storage/images/metal.png')}}" alt="">
                            </div>
                            <div class="fundo" style=""></div>
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">METAL</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('oleo')}}" style="text-decoration: none">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                                <img src="{{asset('storage/images/oleo.png')}}" alt="">
                            </div>
                            <div class="fundo" style=""></div>
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">ÓLEO</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('organico')}}" style="text-decoration: none">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                                <img src="{{asset('storage/images/organico.png')}}" alt="">
                            </div>
                            <div class="fundo" style=""></div>
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">ORGÂNICO</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>