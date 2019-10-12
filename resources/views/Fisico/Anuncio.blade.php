@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form>
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtros</button>
                    <div class="dropdown-menu">
                        <form action="{{ url('/') }}" class="container">
                            <div class="form-group">
                                <select class="custom-select">
                                    <option value="">Tipo</option>
                                    <option value="1">Serviços</option>
                                    <option value="2">Produtos</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select">
                                    <option value="">Ordem</option>
                                    <option value="1">Mais Barato</option>
                                    <option value="2">Mais Caros</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">

</div>
@endsection

@section('script')

@endsection
