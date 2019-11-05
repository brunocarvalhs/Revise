@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
    <img src="{{ asset('img/erros/404.png') }}" class="p-5 m-5">
@endsection
@section('message')

@endsection
