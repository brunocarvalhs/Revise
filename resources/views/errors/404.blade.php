@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
    <div class="row justify-content-center">
        <div class="col align-self-center">
            <img src="{{ asset('img/erros/404.png') }}" class="p-5 m-5 imgErro">
        </div>
    </div>
@endsection
@section('message')

@endsection
