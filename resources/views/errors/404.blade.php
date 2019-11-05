@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
<div class="padding">
    <div class="row">
        <div class="col">
            <img src="{{ asset('img/erros/404.png') }}" width="400" height="400">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>Pagina não encontrada</h1>
        </div>
    </div>
</div>
@endsection
@section('message')

@endsection
