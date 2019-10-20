@extends('template/fisico')

@section('titulo','Notificação')

@section('menu_notificacao','')



@section('style')

@endsection



@section('sistema_fisico')
<div class="row mt-3">
    <div class="col-7 card p-3 m-1">
        <div class="row mt-3">
            <div class="col-12">
                <h4>Notificação</h4>
            </div>
            <hr />
            <div class="col-12 mt-3">
                @if ($Notificacao)
                @component('componentes.notificacao')

                @endcomponent
                @else
                <div class="text-center">
                    <img src={{asset('img/not.png')}} height="500" width="500">
                    <h4> Carro em dia </h4>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-4 card p-3">
        <div class="row mt-3">
            <div class="col-12">
                <h4>Veículos</h4>
            </div>
            <hr />
            <div class="col-12 mt-3">
                <form action="{{route('notificacao')}}" method="POST">
                    <ul class="list-group">

                        <button name="txtPlaca" class="btn list-group-item-action flex-column align-items-start "
                            type="submit">
                            <li class="list-group-item d-flex justify-content-between align-items-center m-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">OFO-9397 <br> CRUZER</h5>
                                </div>
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </button>

                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



@section('script')

@endsection
