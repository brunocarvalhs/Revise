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
                    <button type="submit" class="input-group-append btn btn-success rounded-right">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="shadow-sm p-3 mb-5 rounded">
    <div class="col-sm-4">
        <button class="btn btn-primary rounded-circle">Novo Item<button>
    </div>
    <div class="col-sm-4">
        <button class="btn btn-primary rounded-circle">Novo Item<button>
    </div>
    <div class="col-sm-4">
        <button class="btn btn-primary rounded-circle">Novo Item<button>
    </div>
    <div class="col-sm-4">
        <button class="btn btn-primary rounded-circle">Novo Item<button>
    </div>
</div>
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
