@extends('template.Layoutlogin')

@section('titulo','Login')

@section('login')
<form method="POST" action="{{ url('/SignIn') }}">
    @csrf
    <div class="row formularioLogin">
        <div class="logoRevise">
            <img src="{{asset('img/logo.png')}}" width="200" alt="Revise" class="pt-5">
        </div>
        <div class="col-12 inputLogin">
            <div class="label-float">
                <input type="text" placeholder=" " name="cpfcnpj" id="cpfcnpj">
                <label>CPF/CNPJ</label>
            </div>
        </div>
        <div class="col-12 inputLogin">
            <div class="label-float">
                <input type="password" placeholder=" " name="senha" />
                <label>Senha</label>
            </div>
        </div>
        <div class="col-12 btnEntrar">
            <button type="submit" class="btn btn-dark btn-lg btn-block">
                ENTRAR
            </button>
        </div>
        <div class="col-12 btnCadastrar">
            <button type="button" onclick="signUp()" class="btn btn-dark btn-lg btn-block">
                CADASTRAR
            </button>
        </div>
        <div class="col-12 linkEsqueci">
            <a href="{{ url('/Esqueci') }}">
                <label>
                    Esqueceu sua senha?
                </label>
            </a>
        </div>
    </div>
</form>
@endsection
