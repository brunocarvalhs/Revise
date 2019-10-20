@extends('template\juridico')

@section('titulo','Anuncio')

@section('menu_anuncios','active')





@section('style')

@endsection




@section('sistema_juridico')
<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
       <div class="col-sm-3">
           <h2>Itens</h2>
       </div>
       <div class="col-sm-6">

           <div class="input-group h2">
               <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
               <span class="input-group-btn">
                   <button class="btn btn-primary" type="submit">
                       <span class="glyphicon glyphicon-search"></span>
                   </button>
               </span>
           </div>

       </div>
       <div class="col-sm-3">
           <a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
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
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1002</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1003</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1004</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1005</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1006</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1007</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1008</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1009</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
               </tr>
               <tr>
                   <td>1010</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                   <td>Jes</td>
                   <td>01/01/2015</td>
                   <td class="actions">
                       <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                       <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                       <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
