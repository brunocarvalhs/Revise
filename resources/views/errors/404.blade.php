@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
    <style>
        .imgErro{
            align-items: center;
        }
    </style>
    <img src="{{ asset('img/erros/404.png') }}" class="p-5 m-5 imgErro">
@endsection
@section('message')

@endsection
