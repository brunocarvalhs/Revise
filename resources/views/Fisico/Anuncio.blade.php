@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')
<style>
    .dropdown.dropdown-lg .dropdown-menu {
        margin-top: -1px;
        padding: 6px 20px;
    }

    .input-group-btn .btn-group {
        display: flex !important;
    }

    .btn-group .btn {
        border-radius: 0;
        margin-left: -1px;
    }

    .btn-group .btn:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .btn-group .form-horizontal .btn[type="submit"] {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .form-horizontal .form-group {
        margin-left: 0;
        margin-right: 0;
    }

    .form-group .form-control:last-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
</style>
@endsection

@section('sistema_fisico')
<div class="row">
    <div class="col-12 inputPesquisa">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="filter">Filter by</label>
                                        <select class="form-control">
                                            <option value="0" selected>All Snippets</option>
                                            <option value="1">Featured</option>
                                            <option value="2">Most popular</option>
                                            <option value="3">Top rated</option>
                                            <option value="4">Most commented</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contain">Author</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label for="contain">Contains the words</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="submit" class="input-group-append btn btn-dark">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">

</div>
@endsection

@section('script')

@endsection
