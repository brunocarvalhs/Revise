<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('img/logo.ico')}}" />
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sistema.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise - @yield('titulo')</title>
</head>

<body class="centralizar">
    <div class="container menu">
        <div class="row justify-content-center">
            <div class="divLogin imagemLogin col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center ">
                <div class="row">
                    <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-7 padding"></div>
                    <div class="col-0 col-sm-0 col-md-0 col-lg-12 col-xl-5 background">
                        @yield('login')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/vendor/components/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="/node_modules/sweetalert/dist/sweetalert.min.js" type="text/javascript" async="true" defer></script>
<script src="/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function () {
        $("#cpfcnpj").keypress(function () {
            try {
                $("#cpfcnpj").unmask();
            } catch (e) { }

            var tamanho = $("#cpfcnpj").val().length;

            if (tamanho < 11) {
                $("#cpfcnpj").mask("999.999.999-99");
            } else {
                $("#cpfcnpj").mask("99.999.999/9999-99");
            }

            // ajustando foco
            var elem = this;
            setTimeout(function () {
                // mudo a posição do seletor
                elem.selectionStart = elem.selectionEnd = 10000;
            }, 0);
            // reaplico o valor para mudar o foco
            var currentValue = $(this).val();
            $(this).val('');
            $(this).val(currentValue);
        })
    });

</script>

</html>
@if(session()->has('Login'))
        @if(session()->get('Login')->Status)
            @component('componentes.alert')
                @slot('titulo','SUCESSO')
                @slot('tipo','success')
                @slot('mensagem')
                        {{ session()->get('Login')->Mensagem }}
                @endslot
            @endcomponent
        @else
            @component('componentes.alert')
                @slot('titulo','ERRO')
                @slot('tipo','error')
                @slot('mensagem')
                        {{ session()->get('Login')->Mensagem }}
                @endslot
        @endcomponent
    @endif
@endif
