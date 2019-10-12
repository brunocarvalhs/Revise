@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form>
            <div class="active-pink-3 active-pink-4 mb-4">
                <div class="input-group mb-3 pesquisaInput">
                    <div class="custom-file">
                        <input class="form-control pesquisaInput" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="input-group-append">
                        <select class="selectpicker">
                            <option>Todos</option>
                            <option>Serviços</option>
                            <option>Produtos</option>
                        </select>
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
