<div class="bg-ligth card shadow" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{ asset('img/logo.png')}}" width="20" height="20" class="rounded mr-2" alt="...">
        <strong class="mr-auto">{{ $Nome }} ({{$Placa}})</strong>
        <small class="text-muted">{{ $Data }}</small>
    </div>
    <div class="toast-body bg-ligth">
        Opa, Chegou a hora da verificar o {{ $Nome }}!<br><br>
        Que tal já realizar suas pesquisas?Faça isso em Serviços e Produtos.<br>
        <div class="row mt-3">
            <div class="col-2">
                <a href="{{ route('pesquisa') }}?pesquisa={{ urlencode($Nome) }}&tipo=&preco=">
                    <button class="btn btn-success mt-3">Pesquisar</button>
                </a>
            </div>
            <div class="col">
                <form action="" method="POST">
                    <button class="btn btn-dark mt-3">Já foi resolvido</button>
                    @csrf
                    @method('delete')
                </form>
            </div>
            <div class="col-5"></div>
        </div>
    </div>
</div>
