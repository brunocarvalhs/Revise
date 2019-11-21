@extends('template\juridico')

@section('titulo','Início')

@section('menu_inicio','active')





@section('style')

@endsection





@section('sistema_juridico')
<div class="row p-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                <div class="col-12 card hadow-sm p-3 mb-5 bg-white rounded">
                    <canvas id="Anuncios" width="400" height="400"></canvas>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                <div class="col-12 card hadow-sm p-3 mb-5 bg-white rounded">
                    <canvas id="Indice" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                <div class="col-12 card hadow-sm p-3 mb-5 bg-white rounded">
                    <canvas id="AnunciosHorizontal" width="600" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-3">
        <ul class="list-group">
            <li class="list-group-item disabled">Cras justo odio</li>
        </ul>
    </div>
</div>

@endsection





@section('script')
    @include('componentes.graficoAnuncios')
    @include('componentes.graficoIndice')
    @include('componentes.graficoHorizantal')
@endsection
