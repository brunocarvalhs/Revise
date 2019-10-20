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
    <button class="btn btn-default btn-rounded btn-dark text-right" data-toggle="modal"
    data-target="#modalLoginForm">Novo Anuncio</button>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped shadow-sm p-3 mb-5 rounded" cellspacing="0" cellpadding="0">
            <thead class="shadow p-3 mb-5">
                <tr>
                    <th scope="col"><input type="checkbox" name="select-all" id="select-all"/></th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data de Publicação</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Tipo</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Anuncios as $Anuncios)
                    <tr>
                        <td scope="row"><input type="checkbox" value="{{ $Anuncios->ID }}" id="txtIdAnuncio" name="txtIdAnuncio{{ $Anuncios->ID }}"></td>
                        <td>{{ $Anuncios->Titulo }}</td>
                        <td>{{ $Anuncios->Valor }}</td>
                        <td>{{ $Anuncios->Data }}</td>
                        <td>{{ $Anuncios->Validade }}</td>
                        <td>{{ $Anuncios->Tipo }}</td>
                        <td class="actions">
                            <button class="btn btn-success">Visualiar</button>
                            <button class="btn btn-warning">Editar</button>
                            <button class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('componentes.adicionarAnuncio')
@endsection





@section('script')
    <script>
        $('#select-all').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
@endsection
