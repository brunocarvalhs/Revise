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
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Todos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Serviços
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Produtos
                                </label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Todos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Menores preços
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Maiores preços
                                </label>
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
