@extends('template\juridico')

@section('titulo','Anuncio')

@section('menu_anuncios','active')





@section('style')

@endsection




@section('sistema_juridico')
<div class="row">
    <div class="col-12 inputPesquisa shadow-sm p-3 mb-5 rounded bg-dark">
        <form action="{{ route('pesquisa') }}">
            <div class="input-group">
                <input type="text" class="form-control" name="pesquisa">
                <div class="input-group-append">
                    <button class="btn btn-secondary dropdown-toggle text-light" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">Filtros</button>
                    <div class="dropdown-menu">
                        <div class="form-group">
                            <label class="dropdown-item">Tipos</label>
                            <div class="form-check">
                                <div class="dropdown-item">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipo1" value=""
                                        checked>
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
                                    <input class="form-check-input" type="radio" name="preco" id="preco1" value=""
                                        checked>
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
                <button type="submit" class="input-group-append btn btn-success rounded-right">Pesquisar</button>
            </div>
        </form>
    </div>
</div>
<div class="col-sm-4">
    <button class="btn btn-primary pull-right h2">Novo Item<button>
</div>
</div>
<hr />
<div id="list" class="row">

    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                    <td>Jes</td>
                    <td>01/01/2015</td>
                    <td class="actions">
                        <button class="btn btn-success btn-xs" href="view.html">Visualizar<button>
                                <button class="btn btn-warning btn-xs" href="edit.html">Editar<button>
                                        <button class="btn btn-danger btn-xs" href="#" data-toggle="modal"
                                            data-target="#delete-modal">Excluir<button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection





    @section('script')
    <script>

    </script>
    @endsection
