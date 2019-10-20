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
    <button class="btn btn">Novo Anuncio</button>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead class="col-12">
                <tr>
                    <th class="col-12"><input type="checkbox" name="select-all" id="select-all"/></th>
                    <th class="col-12">Titulo</th>
                    <th class="col-12">Preço</th>
                    <th class="col-12">Data de Publicação</th>
                    <th class="col-12">Validade</th>
                    <th class="col-12">Tipo</th>
                    <th class="col-12 actions">Ações</th>
                </tr>
            </thead>
            <tbody class="row">
                @foreach ($Anuncios as $Anuncios)
                    <tr>
                        <td class="col-12"><input type="checkbox" value="{{ $Anuncios->ID }}" id="txtIdAnuncio" name="txtIdAnuncio{{ $Anuncios->ID }}"></td>
                        <td class="col-12">{{ $Anuncios->Titulo }}</td>
                        <td class="col-12">{{ $Anuncios->Valor }}</td>
                        <td class="col-12">{{ $Anuncios->Data }}</td>
                        <td class="col-12">{{ $Anuncios->Validade }}</td>
                        <td class="col-12">{{ $Anuncios->Tipo }}</td>
                        <td class="col-12" class="actions">
                            <button class="btn btn-success">Visualiar</button>
                            <button class="btn btn-warning">Editar</button>
                            <button class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
