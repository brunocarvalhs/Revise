@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
    <img src="{{ asset('img/erros/404.png') }}" width="500" height="500">
@endsection
@section('message')

@endsection
