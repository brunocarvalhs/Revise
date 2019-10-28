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
                        <div class="row">
                            <div class="col-6">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://http2.mlstatic.com/pai-ausente-filho-carente-D_NQ_NP_770632-MLB31546662007_072019-F.jpg" height="500" width="500" alt="Primeiro Slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://http2.mlstatic.com/pai-ausente-filho-carente-D_NQ_NP_770632-MLB31546662007_072019-F.jpg" height="500" width="500" alt="Primeiro Slide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4 class="card-text text-dark" align="center">{{ $Anuncio->Titulo }}</h4>
                                <h5 class="card-text text-dark m-5" align="center">R$ {{ $Anuncio->Valor }} </h5>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <h4>Descrição</h4>
                                <p class="card-text text-dark mt-5" align="justify">{{ $Anuncio->Descricao }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4>Endereço</h4>

                            </div>
                        </div>
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
