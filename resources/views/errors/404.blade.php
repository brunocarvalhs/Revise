@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
    <div class="row justify-content-center">
        <img src="{{ asset('img/erros/404.png') }}" width="300" height="300">
    </div>
@endsection
@section('message')

@endsection
