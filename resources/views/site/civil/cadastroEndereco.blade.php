@extends('layouts.app')
@extends('site.civil.layoutCivil')

@section('content')
<div class="container mt-5 pt-5">
        <h1 style="display: flex; justify-content: center; font-weight: bolder">CADASTRO DE ENDEREÇO</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="/cadastro/endereco" method="POST" enctype="multipart/form-data" class="form-signin" >
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="cidade" class="sr-only mt-3" style="font-size: 1rem">Cidade</label>
                            <select id="cidade" class="form-control" name="cidade" style="background-color: #E9E9E9; border-color:chartreuse" >
                                <option value=""></option>
                                <option value="Varginha">Varginha</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="uf" class="sr-only mt-3" style="font-size: 1rem">UF</label>
                            <select id="uf" class="form-control" name="uf" style="background-color: #E9E9E9; border-color:chartreuse" >
                                <option value=""></option>
                                <option value="MG">MG</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="rua" class="sr-only mt-3" style="font-size: 1rem">Rua</label>
                            <input type="text" id="rua" class="form-control" style="background-color: #E9E9E9; border-color:chartreuse" name="rua" required >
                        </div>
                        <div class="col-sm-2">
                            <label for="numero" class="sr-only mt-3" style="font-size: 1rem">Número</label>
                            <input type="number" id="numero" class="form-control" style="background-color: #E9E9E9; border-color:chartreuse" name="numero" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="bairro" class="sr-only mt-3" style="font-size: 1rem">Bairro</label>
                        <input type="text" id="bairro" class="form-control" style="background-color: #E9E9E9; border-color:chartreuse" name="bairro" required >
                    </div>
                </form>
            </div>
        </div>
        <div style="display: flex; justify-content: center">
            <div class="row text-center mt-3">
                <a href="/">
                    <button class="btn btn-lg btn-block mt-4"
                        style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white"
                        type="submit">Cadastrar</button>
                </a>
                <a class="color-primary mt-1" href="{{route('perfilCivil')}}" style="text-decoration: none">Já tem endereço cadastrado? Clique aqui!</a>
            </div>
        </div>
    </div>
@endsection
