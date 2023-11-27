@extends('layouts.app')
@extends('site.civil.layoutCivil')
@section('title', 'Descarte aqui')
@section('content')
<div class="container mt-5 pt-5">
    <form action="/agendamento/agendar" method="POST">
        @csrf
        <p>Selecionar Catador:</p>
        <select class="form-select" name="catador" id="">
            @foreach($data as $name)
                <option value="{{$name->id}}">{{$name->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success btn-sm mt-2">Selecionar</button>
    </form>
</div>
@endsection