@extends('template\juridico')

@section('titulo','Anuncio')

@section('menu_anuncios','active')





@section('style')

@endsection




@section('sistema_juridico')
<div id="main" class="container-fluid" style="margin-top: 50px">
    <div id="top" class="row">
        <form action="" method="POST">
        <div class="col-sm-8">
            <div class="input-group h2">
                <div class="form-group input-group">
                    <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
                    <span class="input-group-addon"><button type="submit" class="btn btn-primary">Pesquisar</button></span>
                </div>
            </div>
        </div>
       </form>
       <div class="col-sm-4">
           <button class="btn btn-primary pull-right h2">Novo Item<button>
       </div>
   </div> <!-- /#top -->


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
                       <button class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir<button>
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
