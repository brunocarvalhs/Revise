@extends('template\juridico')

@section('titulo','Anuncio')

@section('menu_anuncios','active')





@section('style')

@endsection




@section('sistema_juridico')
<div class="col-12 inputPesquisa shadow-sm p-3 mb-5 rounded">
    <div class="row">
        <div class="col">
            <button class="btn btn-dark btn-rounded text-right" data-toggle="modal"
                data-target="#modalLoginForm">Novo Anuncio</button>
        </div>
        <div class="col">
            <button class="btn btn-success" id="visualizar">Visualiar</button>
        </div>
        <div class="col">
            <button class="btn btn-warning" id="editar">Editar</button>
        </div>
        <div class="col">
            <button class="btn btn-danger" id="excluir">Excluir</button>
        </div>
    </div>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped shadow-sm p-3 mb-5 rounded" cellspacing="0" cellpadding="0">
            <thead class="shadow">
                <tr>
                    <th scope="col"><input type="checkbox" name="select-all" id="select-all"/></th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data de Publicação</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody class="mt-5">
                @foreach ($Anuncios as $Anuncios)
                    <tr>
                        <td scope="row"><input type="checkbox" value="{{ $Anuncios->ID }}" id="txtIdAnuncio" name="txtIdAnuncio{{ $Anuncios->ID }}"></td>
                        <td>{{ $Anuncios->Titulo }}</td>
                        <td>{{ $Anuncios->Valor }}</td>
                        <td>{{ $Anuncios->Data }}</td>
                        <td>{{ $Anuncios->Validade }}</td>
                        <td>{{ $Anuncios->Tipo }}</td>
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
        $('#excluir').click(function(){
            Swal.fire({
            type: "question",
            title: "Confirmação",
            text: "Deseja realmente deletar esses anuncios? Sendo imposivel reastaurar após decição, sem reembolso.",
            showCancelButton: true,
            confirmButtonText: 'Sim, Deletar',
            cancelButtonText: 'Não, cancelar',
            reverseButtons: true
            }).then((result)=>{
                if (result.value) {
                    var checks = document.querySelectorAll("#txtIdAnuncio"),
                    i = checks.length,
                    arr = [];
                    while (i--) {
                        arr.push(checks[i].value);
                    }

                    $.post({{ url('Anuncios/Todos') }},{ anuncio : arr},function(result){
                        Swal.fire({
                            type: result.type,
                            title: result.titulo,
                            text: result.texto,
                        })
                    });
                }
            });
        });
    </script>
@endsection
