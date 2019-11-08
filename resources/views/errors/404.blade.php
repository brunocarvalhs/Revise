@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
<div class="padding">
    <div class="row">
        <div class="col">
            <img src="{{ asset('img/erros/404.png') }}" width="500" height="500">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>Página não encontrada</h1>
        </div>
    </div>
</div>
@endsection
@section('message')

@endsection
