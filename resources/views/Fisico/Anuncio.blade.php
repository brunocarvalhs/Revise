@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="card">
        <form>
            <div class="row">
                <div class="col-12 inputPesquisa">

                    <div class="active-pink-3 active-pink-4 mb-4">
                        <input class="form-control pesquisaInput" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 inputPesquisa">
                    @include('componentes\filtro')
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection
