@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
    <img src="{{ asset('img/erros/404.png') }}">
@endsection
@section('message')

@endsection
