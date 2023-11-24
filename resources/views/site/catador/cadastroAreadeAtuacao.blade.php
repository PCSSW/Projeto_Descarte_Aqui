@extends('layouts.app')
@extends('site.catador.layoutCatador')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 style="display: flex; justify-content: center; font-weight: bolder">ÁREA DE ATUAÇÃO</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="/areaDeAtuacao" method="POST" enctype="multipart/form-data" class="form-signin">
                @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="regiao" class="sr-only mt-3" style="font-size: 1rem">Região</label>
                            <input type="text" id="regiao" class="form-control"
                                style="background-color: #E9E9E9; border-color:chartreuse" name="regiao" required>
                        </div>
                        <div class="col-sm-2">
                            <label for="bairro" class="sr-only mt-3" style="font-size: 1rem">Bairro</label>
                            <input type="text" id="bairro" class="form-control"
                                style="background-color: #E9E9E9; border-color:chartreuse" name="bairro" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="descricao" style="font-size: 1rem">Descrição:(adicione mais detalhes do local)</label>
                        <textarea class="form-control" style="background-color: #E9E9E9; border-color: chartreuse" id="descricao" cols="30" rows="4" name="descricao"></textarea>
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