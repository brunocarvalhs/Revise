@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Filtros</button>
                    <div class="dropdown-menu">
                        <div class="form-group">
                            <select class="custom-select">
                                <option value="">Tipo</option>
                                <option value="1">Serviços</option>
                                <option value="2">Produtos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select">
                                <option value="">Ordem</option>
                                <option value="1">Mais Barato</option>
                                <option value="2">Mais Caros</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="input-group-append btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</div>
<div class="row">

</div>
@endsection

@section('script')

@endsection
