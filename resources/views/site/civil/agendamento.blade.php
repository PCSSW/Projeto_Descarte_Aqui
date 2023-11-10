@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col">
            <img src="{{asset('storage/imagens/nopicture.png')}}" alt="">
        </div>
        <div class="col" style="font-size: x-large; font-weight: bold;">
            Magnólia
        </div>
        <div class="col mt-2">
            ⭐⭐⭐⭐⭐
        </div>
    </div>
<div style="display: flex; justify-content: center">
    <form>
        <div class="row mt-4">
            <div class="form-group col-md-6">
                <label for="inputMaterial">Material:</label>
                <select id="inputMaterial" class="form-control">
                <option></option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDia">Dia:</label>
                <select id="inputDia" class="form-control">
                <option></option>
                <option>...</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col-md-6">
                <label for="inputMaterial">Quantidade:</label>
                <select id="inputMaterial" class="form-control">
                <option></option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDia">Horário:</label>
                <select id="inputDia" class="form-control">
                <option></option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group col mt-2">
                <label for="textareaObs">Obs:</label>
                <textarea class="form-control" id="textareaObs" cols="30" rows="3"></textarea>
            </div>
        </div>
        <div style="display: flex; justify-content: center">
            <div class="row">
                <div class="form-check mt-4" style="display: flex; justify-content: center">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck" style="font-size: 1rem">
                        Usar endereço cadastrado
                    </label>
                </div>
                <div style="display: flex; justify-content: center">
                    <a class="color-primary mt-2" href="#" style="text-decoration: none">Cadastrar novo endereço</a>
                </div>
                <button type="submit" class="btn mt-2" style="background-color: #78D242; color:white; font-weight: bold;">
                    <a href="/" style="color: white; text-decoration: none">Concluir Agendamento</a>
                </button>
            </div>
        </div>
      </form>
</div>

</div>
@endsection