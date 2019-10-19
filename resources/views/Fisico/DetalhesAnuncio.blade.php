@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('menu_anuncio','active')

@section('style')
<style>

</style>
@endsection

@section('sistema_fisico')
    @foreach ($Anuncio as $Anuncio)
    <div class="row">
    <!--Anúncios Postados-->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 paddingCards">
                <div class="card bg-white h-100">
                    <div class="card-body ">
                        <img width="300px" height="300px" align="left" src="https://http2.mlstatic.com/oleo-do-motor-ipiranga-f1-master-sintetico-10w40-sm-4l-D_NQ_NP_656972-MLB31088368276_062019-O.webp" alt="...">
                        <br><br>
                        <h4 class="card-text text-dark" align="center">{{ $Anuncio->Titulo }}</h4>
                        <p class="card-text text-dark" align="center">{{ $Anuncio->Descricao }}</p>
                        <h5 class="card-text text-dark" align="center"> Preço : R$ {{ $Anuncio->Valor }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card map-card">
                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                                <div id='map'></div>
                        </div>
                </div>
        </div>
    </div>
    @endforeach
@endsection

@section('script')
<!--<script src="https://maps.googleapis.com/maps/api/place/textsearch/json?query={{ urlencode(utf8_encode($Anuncio->Endereco))}}&key=AIzaSyBoC_pjXcdmJvbmB_nUbbQQfbv2n8iPB6c"></script>-->
@endsection
