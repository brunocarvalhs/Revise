@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form>
            <div class="active-pink-3 active-pink-4 mb-4">
                <input class="form-control pesquisaInput" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input class="form-control pesquisaInput" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    @include('componentes\filtro')
</div>
@endsection

@section('script')

@endsection
