@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')
    <link href="{{ asset('css/SearchBar.css') }}"
@endsection

@section('sistema_fisico')
    <div class="col">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="input-field first" id="first">
                        <input class="input" id="inputFocus" type="text" placeholder="Keyword" />
                        <button class="clear" id="clear">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
