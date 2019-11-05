@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
<style>
    .container {
        width: 100vw;
        height: 100vh;
        background: #6C7A89;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center
    }
    .box {
        width: 300px;
        height: 300px;
        background: #fff;
    }
</style>
<div class="padding container">
    <div class="row">
        <div class="col box">
            <img src="{{ asset('img/erros/404.png') }}" width="400" height="400">
        </div>
    </div>
    <div class="row">
        <h1>Pagina não encontrada</h1>
    </div>
</div>
@endsection
@section('message')

@endsection
