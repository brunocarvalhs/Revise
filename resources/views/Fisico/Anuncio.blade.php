@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('menu_anuncio','active')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form action="{{ route('pesquisa') }}">
            <div class="input-group">
                <input type="text" class="form-control" name="pesquisa">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Filtros</button>
                    <div class="dropdown-menu">
                        <div class="form-group">
                            <label class="dropdown-item">Tipos</label>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="todos" checked>
                                    <label class="form-check-label" for="tipo1">
                                        Todos
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="servico">
                                    <label class="form-check-label" for="tipo2">
                                        Serviços
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo3" value="produto">
                                    <label class="form-check-label" for="tipo3">
                                        Produtos
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="form-group">
                            <label class="dropdown-item">Preços</label>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="preco" id="preco1" value="todos" checked>
                                    <label class="form-check-label" for="preco1">
                                        Todos
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="preco" id="preco2" value="menor">
                                    <label class="form-check-label" for="preco2">
                                        Menores preços
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="preco" id="preco3" value="maior">
                                    <label class="form-check-label" for="preco3">
                                        Maiores preços
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="input-group-append btn btn-dark">Pesquisar</button>
            </div>
        </form>
    </div>
</div>
<div class="row">

</div>
@endsection

@section('script')

@endsection
