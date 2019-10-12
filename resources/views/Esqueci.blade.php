@extends('template.Layoutlogin')

@section('titulo', 'Recuperar Conta')

@section('login')
<form method="POST" action="{{ url('/Recuperar') }}" onsubmit="">
    @csrf
    <div class="row formularioLogin padding">
        <div class="logoRevise">
            <img src="{{asset('img/logo.png')}}" width="200" alt="Revise">
        </div>
        <div class="col-12 padding ">
            <div class="label-float">
                <input type="text" placeholder=" " name="cpfcnpj" id="cpfcnpj" class="ls-mask-cpf">
                <label>CPF/CNPJ</label>
            </div>
        </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">
                Recuperar
            </button>
        </div>
        <div class="col-12 linkEsqueci">
            <a href="{{ url('/SignIn') }}">
                <label>
                    Volta
                </label>
            </a>
        </div>
    </div>
</form>
@endsection

