@extends('template\juridico')

@section('titulo','Anuncio')

@section('menu_anuncios','active')





@section('style')

@endsection




@section('sistema_juridico')
<div id="main" class="container-fluid" style="margin-top: 50px">
    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Anuncios</h2>
        </div>
        <form action="" method="POST">
        <div class="col-sm-6">
            <div class="input-group h2">
                <input class="form-control" id="search" type="text" placeholder="Pesquisar Anuncio">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
       </form>
       <div class="col-sm-3">
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
