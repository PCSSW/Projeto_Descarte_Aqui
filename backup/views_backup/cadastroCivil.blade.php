@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
        <h1 style="display: flex; justify-content: center; font-weight: bolder">CADASTRO CÍVIL</h1>
        <div class="row">
            {{-- <div class="col-sm-8">
                <div class="col me-4 ">
                        <form class="form-signin">
                            @csrf
                            <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Seus Dados</h1>
                            <div class="row">
                                <div class="col">
                                    <label for="nomeCivil" class="sr-only mt-3" style="font-size: 1rem">Nome Completo</label>
                                    <input type="text" id="nomeCivil" class="form-control" style="background-color: #E9E9E9" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="José Vieira">
                                </div>
                                <div class="col">
                                    <label for="cpf" class="sr-only mt-3" style="font-size: 1rem">CPF</label>
                                    <input type="text" id="cpfmask" class="cpf form-control" style="background-color: #E9E9E9" name="cpf" required placeholder="111.222.333-44">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="telefone" class="sr-only mt-3" style="font-size: 1rem">Telefone</label>
                                    <input type="text" id="telmask" class="telefone form-control" name="telefone" style="background-color: #E9E9E9" name="telefone" placeholder="(35) 9123-4567">
                                </div>
                                <div class="col">
                                    <label for="email" class="sr-only mt-3" style="font-size: 1rem">E-mail</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" style="background-color: #E9E9E9" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="jose@gmail.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="password" class="sr-only mt-3" style="font-size: 1rem">Senha</label>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" style="background-color: #E9E9E9" name="password" required autocomplete="new-password" placeholder="mínimo 8 caractéres">
                                </div>
                                <div class="col">
                                    <label for="password-confirm" class="sr-only mt-3" style="font-size: 1rem">Confirmar senha</label>
                                    <input type="password" id="password-confirm" class="form-control" style="background-color: #E9E9E9" name="password_confirmation" required autocomplete="new-password" placeholder="digite a senha novamente">
                                </div>
                            </div>
                        </form>
                </div>
            </div> --}}

            <div class="col-sm-8 ">
                <form class="form-signin">
                    @csrf

                    <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Seu endereço</h1>
                    <div class="row">
                        <div class="col">
                            <label for="cidade" class="sr-only mt-3" style="font-size: 1rem">Cidade</label>
                            <input type="text" id="cidade" class="form-control" style="background-color: #E9E9E9" name="cidade" required placeholder="Varginha">
                        </div>
                        <div class="col-sm-4">
                            <label for="uf" class="sr-only mt-3" style="font-size: 1rem">UF</label>
                            <input type="text" id="uf" class="form-control" style="background-color: #E9E9E9" name="uf" required placeholder="MG">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="rua" class="sr-only mt-3" style="font-size: 1rem">Rua</label>
                            <input type="text" id="rua" class="form-control" style="background-color: #E9E9E9" name="rua" required placeholder="Delfim Moreira">
                        </div>
                        <div class="col-sm-4">
                            <label for="numero" class="sr-only mt-3" style="font-size: 1rem">Número</label>
                            <input type="number" id="numero" class="form-control" style="background-color: #E9E9E9" name="numero" required placeholder="01">
                        </div>
                    </div>

                    <label for="bairro" class="sr-only mt-3" style="font-size: 1rem">Bairro</label>
                    <input type="text" id="bairro" class="form-control" style="background-color: #E9E9E9" name="bairro" required placeholder="Centro">
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
                <a class="color-primary mt-1" href="/login" style="text-decoration: none">Já tem cadastro? Entre na sua
                    conta</a>
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