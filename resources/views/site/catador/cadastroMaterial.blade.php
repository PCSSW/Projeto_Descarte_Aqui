@extends('layouts.app')
@extends('site.catador.layoutCatador')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 style="display: flex; justify-content: center; font-weight: bolder">ÁREA DE ATUAÇÃO</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="/material" method="POST" enctype="multipart/form-data" class="form-signin">
                @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="material" class="sr-only mt-3" style="font-size: 1rem">Nome do material</label>
                            <input type="text" id="material" class="form-control"
                                style="background-color: #E9E9E9; border-color:chartreuse" name="material" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="tipo_material" class="sr-only mt-3" style="font-size: 1rem">Tipo de material</label>
                        <input type="text" id="tipo_material" class="form-control"
                            style="background-color: #E9E9E9; border-color:chartreuse" name="tipo_material" required>
                    </div>
                    <div style="display: flex; justify-content: center">
                        <div class="row text-center mt-3">
                            <button class="btn btn-lg btn-block mt-4"
                                style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Cadastrar
                            </button>
                            <a class="color-primary mt-1" href="{{ route('perfilCatador') }}" style="text-decoration: none">Já tem
                                área de atuação cadastrada? Clique aqui!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection