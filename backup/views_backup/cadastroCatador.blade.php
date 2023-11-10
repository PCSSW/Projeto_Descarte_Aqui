@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
        <h1 style="display: flex; justify-content: center; font-weight: bolder">CADASTRO CATADOR</h1>
    <div class="row">
        <div class="col">
            <div class="col me-4" style="display: flex; justify-content: center">
                    <form class="form-signin"  style="width: 50%;">
                      <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Seus Dados</h1>
                      <div class="row">
                        <div class="col">
                            <label for="inputNome" class="sr-only mt-3" style="font-size: 1rem">Nome Completo</label>
                            <input type="text" id="inputNome" class="form-control" style="background-color: #E9E9E9"  required placeholder="José Vieira">
                        </div>
                        <div class="col">
                            <label for="inputCPF" class="sr-only mt-3" style="font-size: 1rem">CPF</label>
                            <input type="text" id="cpfmask" class="form-control" style="background-color: #E9E9E9"  required placeholder="111.222.333-44">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputTelefone" class="sr-only mt-3" style="font-size: 1rem">Telefone</label>
                            <input type="text" id="telmask" class="form-control" style="background-color: #E9E9E9"  required placeholder="(35) 9123-4567">
                        </div>
                        <div class="col">
                            <label for="inputEmail" class="sr-only mt-3" style="font-size: 1rem">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control" style="background-color: #E9E9E9"  required placeholder="jose@gmail.com">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputSenha" class="sr-only mt-3" style="font-size: 1rem">Senha</label>
                            <input type="password" id="inputSenha" class="form-control" style="background-color: #E9E9E9"  required placeholder="mínimo 8 caractéres">
                        </div>
                        <div class="col">
                            <label for="inputConfirmar" class="sr-only mt-3" style="font-size: 1rem">Confirmar senha</label>
                            <input type="password" id="inputConfirmar" class="form-control" style="background-color: #E9E9E9"  required placeholder="digite novamente">
                        </div>
                      </div>                         
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center">
        <div class="row text-center mt-3">
            <a href="/continuarCadastro">
                <button class="btn btn-lg btn-block mt-4" style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Continuar</button>
            </a>
            <a class="color-primary mt-1" href="/login" style="text-decoration: none">Já tem cadastro? Entre na sua conta</a>        
        </div>
    </div>
</div>
@endsection
@section('javascript')
    <script type="module">
        $().ready(function () {
            let telmask = new Inputmask ('(99) 99999-9999')
            telmask.mask("#telmask");
        });
    </script>
    <script type="module">
        $().ready(function () {
            let cpfmask = new Inputmask ('999.999.999-99')
            cpfmask.mask("#cpfmask");
        });
    </script>
@endsection