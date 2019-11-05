@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message')
    <img src="{{ asset('img/erros/404.png') }}">
@endsection
