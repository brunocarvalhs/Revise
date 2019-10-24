@extends('template/fisico')

@section('titulo','Início')

@section('menu_inicio','active')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row p-3">
    <div class="col-12">
        <div class="row">
            <div class="col-6 card shadow-sm">
                <h5 class="p-1 pt-3 mb-4">Status</h5>
                @for ($x = 0; $x < 10; $x++)
                    <div class="row p-1">
                        <div class="col-12">
                            @component('componentes.contagem')

                            @endcomponent
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 m-1 p-3 card shadow-sm">
                        <h5 class="mb-4">Veículos</h5>
                        <div class="row">
                            @for ($i = 0; $i < 2; $i++)
                                @component('componentes.veiculos')

                                @endcomponent
                            @endfor
                        </div>
                    </div>
                    <div class="col-12 m-1 p-3 card shadow-sm">
                        <h5 class="mb-4">Notificação</h5>
                        @for ($i = 0; $i < 2; $i++)
                            <div class="p-1">
                                @component('componentes.notificacao')

                                @endcomponent
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@include('componentes.quilometragem')
@endsection
