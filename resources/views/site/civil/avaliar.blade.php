@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row mt-5">
        <div class="col" style="display: flex; justify-content: center">
            <div class="alert" style="background-color: #B9E66F;height: auto; width: 60%">
                <div class="row">
                    <div class="col">IMG</div>
                    <div class="col" style="font-size: x-large; font-weight: bold;">
                        Como você avalia Magnólia?
                        <div style="display: flex; justify-content: center">
                            <p>☆☆☆☆☆</p>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="form-group col mt-2">
                        <label for="textareaMensagem" style="font-weight: bold">Deixe uma Mensagem:</label>
                        <textarea class="form-control" style="background-color: #CEED9A; border: none" id="textareaMensagem" cols="30" rows="4"></textarea>
                    </div>
                    <div class="row mt-4" style="display: flex; justify-content: flex-end">
                        <a href="/">
                            <button type="button" class="btn btn-danger me-2" style="width: 25%; font-weight: bold;" type="submit">Cancelar</button>
                        </a>
                        <a href="/">
                            <button type="button" class="btn btn-success me-2" style="width: 25%; font-weight: bold;" type="submit">Enviar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>      
    </div>
</div>
@endsection