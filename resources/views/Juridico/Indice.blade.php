@extends('template\juridico')

@section('titulo','Indice')

@section('menu_indice','active')




@section('style')

@endsection




@section('sistema_juridico')
    <div class="row m-3">
        <div class="col-12 col-sm-12 card p-1 m-1 hadow-sm p-3 mb-5 bg-white rounded">
            <canvas id="AnunciosHorizontal" width="600" height="200"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                    <div class="card">

                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection




@section('script')
    @include('componentes.graficoHorizantal')
@endsection
