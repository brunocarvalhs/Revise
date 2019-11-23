<div class="mb-5 rounded col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-10 bg-light w-50">
    <div class="card h-100 rounde shadow-sm">
        <div class="card-horizontal">
            <div class="card-body">
                <h6 class="card-subtitle">{{ $tipo }}</h6>
                <h4 class="card-title">{{ $titulo }}</h4>
                <h6 class="card-title">Local: {{ $cidade }} - {{ $uf }}</h6>
                @if($preco != null)
                    <h5>R$ {{ $preco }}</h5>
                @endif
            <a class="btn btn-outline-warning  w-100 col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" href="{{ url('/Home/Anuncios') }}/{{ $id }}" role="button"> Mais Detalhes +</a>
            </div>
        </div>
    </div>
</div>

