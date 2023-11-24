@extends('layouts.app')
@extends('site.catador.layoutCatador')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 style="display: flex; justify-content: center; font-weight: bolder">DISPONIBILIDADE</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="/disponibilidade" method="POST" enctype="multipart/form-data" class="form-signin">
                @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="dia" class="sr-only mt-3" style="font-size: 1rem">Dias disponíveis</label>
                            <input type="text" id="dia" class="form-control"
                                style="background-color: #E9E9E9; border-color:chartreuse" name="dia" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="horario" class="sr-only mt-3" style="font-size: 1rem">Horários disponíveis</label>
                            <input type="text" id="hormask" class="form-control"
                                style="background-color: #E9E9E9; border-color:chartreuse" name="horario" required>
                    </div>
                    <div style="display: flex; justify-content: center">
                        <div class="row text-center mt-3">
                            <button class="btn btn-lg btn-block mt-4"
                                style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Cadastrar
                            </button>
                            <a class="color-primary mt-1" href="{{ route('perfilCatador') }}" style="text-decoration: none">Já tem
                                disponibilidade cadastrada? Clique aqui!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection
@section('javascript')
    <script type="module">
        $().ready(function () {
            let hormask = new Inputmask ('99:99 às 99:99')
            hormask.mask("#hormask");
        });
    </script>
@endsection