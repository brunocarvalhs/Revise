@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>
    .MultiCarousel {
        float: left;
        overflow: hidden;
        padding: 40px;
        width: 100%;
    }

    .MultiCarousel .MultiCarousel-inner {
        transition: 1s ease all;
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item {
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item>div {
        text-align: center;
        padding: 10px;
        margin: 10px;
        background: #f1f1f1;
        color: #000000;
    }

    .MultiCarousel .leftLst,
    .MultiCarousel .rightLst {
        position: absolute;
        border-radius: 50%;
        top: calc(50% - 20px);
    }

    .MultiCarousel .leftLst {
        left: 0;
    }

    .MultiCarousel .rightLst {
        right: 0;
    }

    .MultiCarousel .leftLst.over,
    .MultiCarousel .rightLst.over {
        pointer-events: none;
        background: #454545;
    }

    .leftLst {
        width: 50px;
        height: 50px;
    }

    .rightLst {
        width: 50px;
        height: 50px;
    }
</style>
@endsection




@section('sistema_fisico')
<div class="row">
    <div class="col-12 card mt-3 w-100 shadow p-3 bg-white rounded">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
            <div class="MultiCarousel-inner">
                @foreach ($Veiculos as $Veiculo)
                <a href="{{ url('/Home/Veiculo') }}/{{ $Veiculo->placa }} ">
                    <div class="item">
                        <div class="pad15 shadow-sm bg-light rounded">
                            <p class="lead">{{ $Veiculo->placa }}</p>
                            <p>{{ $Veiculo->modelo }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <button class="btn btn-primary leftLst">
                <svg id="i-caret-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22" height="22"
                    fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M22 30 L6 16 22 2 Z" />
                </svg>
            </button>
            <button class="btn btn-primary rightLst">
                <svg id="i-caret-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22" height="22"
                    fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M10 30 L26 16 10 2 Z" />
                </svg>
            </button>
        </div>
    </div>
    <div class="container mt-3">
        @include('componentes.adicionarVeiculo')
        <div class="row">
            <div class="text-center">
                <button class="btn btn-default btn-rounded mb-4 btn-warning" data-toggle="modal"
                    data-target="#modalLoginForm">Adicionar</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 card shadow p-3 bg-white rounded">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Placa</label>
                        <input type="text" class="form-control" placeholder="Placa" data-mask='AAA-0000' disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Modelo / Marca</label>
                        <input type="text" class="form-control" placeholder="Modelo / Marca" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Ano</label>
                        <input type="text" class="form-control" id="" placeholder="Ano" data-mask='0000' disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Cor</label>
                        <input type="text" class="form-control" id="" placeholder="Cor" data-mask='0000' disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">RENAVAN</label>
                    <input type="text" class="form-control" id="" placeholder="RENAVAN" disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" id="" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEstado">Estado</label>
                        <input type="text" class="form-control" placeholder="Estado" id="">
                    </div>
                </div>
                <button class="btn btn-primary  col-md-4 mb-1">Checklist</button>
                <button class="btn btn-primary  col-md-4 mb-1">Delete</button>
            </div>
        </div>
    </div>
    @endsection




    @section('script')
    <script>
        $(document).ready(function () {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function () {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();




            $(window).resize(function () {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function () {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    }
                    else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                    $(this).find(itemClass).each(function () {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                }
                else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
    </script>
    <script src="{{asset('js/API.js')}}"></script>
    @endsection


    @section('mensagem')
    @if(session()->has('Cadastro'))
    @if(session()->get('Cadastro')->Status)
    @component('componentes.alert')
    @slot('titulo','SUCESSO')
    @slot('icone','success')
    @slot('mensagem')
    {{ session()->get('Cadastro')->Mensagem }}
    @endslot
    @endcomponent
    @else
    @component('componentes.alert')
    @slot('titulo','ERRO')
    @slot('icone','error')
    @slot('mensagem')
    {{ session()->get('Cadastro')->Mensagem }}
    @endslot
    @endcomponent
    @endif
    @endif
    @endsection