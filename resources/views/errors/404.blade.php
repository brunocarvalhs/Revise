@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', __('<img src="{{ asset('img/erros/404.png') }}">'))
@section('message', __('Pagina não encontrada'))
