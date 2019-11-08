<div class="bg-ligth card shadow" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">{{ $Nome }}</strong>
        <small class="text-muted">11 mins ago</small>
        <form action="" onsubmit="" method="POST">
            <button type="submit" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @csrf
            @method('delete')
        </form>
    </div>
    <div class="toast-body">
        Opa, Chegou a hora da verificar o {{ $Nome }}!<br><br>
        Que tal já realizar suas pesquisas?Faça isso em Serviços e Produtos.<br>
        <a href="{{ route('pesquisa') }}?pesquisa={{ urlencode($Nome) }}&tipo=&preco=">
            <button class="btn btn-success mt-3">Pesquisar</button>
        </a>
    </div>
</div>
