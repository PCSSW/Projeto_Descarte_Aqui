@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <h1 style="display: flex; justify-content: center; font-weight: bolder">CADASTRO CATADOR</h1>
    <form>
        <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Dados Materiais</h1>
        <div style="display: flex; justify-content: center">
            <div class="row mt-4">
                <div class="col">
                    <p style="font-weight: bold">Materiais</p>
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Papel</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Plástico</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Vidro</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Metal</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Óleo de cozinha</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Orgânico</label>
                    </div>
                </div>
                <div class="col">
                    <p style="font-weight: bold">Dias da semana</p>
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Segunda-feira</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Terça-feira</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Quarta-feira</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Quinta-feira</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Sexta-feira</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Sábado</label>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div style="display: flex; justify-content: center">
        <div class="row text-center mt-3">
            <a href="/">
                <button class="btn btn-lg btn-block mt-4" style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Cadastrar</button>
            </a>
            <a class="color-primary mt-1" href="/login" style="text-decoration: none">Já tem cadastro? Entre na sua conta</a>        
        </div>
    </div>
</div>
@endsection