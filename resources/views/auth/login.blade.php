@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row mt-5">
        <div class="col-sm-8 mt-5">
            <img src="{{asset('storage/images/login.png')}}" alt="Login">
        </div>
        <div class="col-sm-4 mt-5">
                <div class="">
                    <form method="POST" action="/login" class='form-signin'>
                    <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">LOGIN</h1>
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="sr-only" style="font-size: 1rem">{{ __('E-mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="sr-only" style="font-size: 1rem;">{{ __('Senha') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                                <button type="submit" class="btn btn-lg btn-block mt-4" style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white">
                                    {{ __('Entrar') }}
                                </button>
                                <div class="h5 text-center">
                                <a class="color-primary mt-4" style="text-decoration: none" href="{{route('register')}}">Não tem cadastro? Crie sua conta</a>
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection