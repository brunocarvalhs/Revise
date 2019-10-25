@extends('template/fisico')

@section('titulo','Notificação')

@section('menu_notificacao','')



@section('style')

@endsection



@section('sistema_fisico')
<div class="row p-3">
    <div class="col-7 card p-3 m-1 shadow-sm">
        <div class="row mt-3">
            <div class="col-12">
                <h4>Notificação</h4>
            </div>
            <hr />
            <div class="col-12 mt-3">
                @if ($Notificacao)
                    @foreach ($Notificacao as $item)
                        <div class="m-1 p-3">
                            @component('componentes.notificacao')
                                @slot('Nome',$item->nm_peca)
                            @endcomponent
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <img src={{asset('img/not.png')}} height="500" width="500">
                        <h4> Carro em dia </h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-4 card p-3 shadow-sm">
        <div class="row mt-3">
            <div class="col-12">
                <h4>Veículos</h4>
            </div>
            <hr />
            <div class="col-12 mt-3">
                <ul class="list-group">
                    @foreach ($Veiculos as $Veiculo)
                    <form action="{{ route('notificacao') }}" method="POST">
                        @csrf
                        <input type="hidden" name="Placa" value="{{ $Veiculo->placa }}">
                        <button class="btn list-group-item-action flex-column align-items-start "
                            type="submit">
                            <li class="list-group-item d-flex justify-content-between align-items-center m-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $Veiculo->placa }} <br> {{ $Veiculo->modelo }}</h5>
                                </div>
                                <span class="badge badge-primary badge-pill">{{ $Veiculo->Notificacao }}</span>
                            </li>
                        </button>
                    </form>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection



@section('script')

@endsection
