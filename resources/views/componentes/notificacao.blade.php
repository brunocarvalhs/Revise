<div>
    <a href="{{ route('pesquisa') }}?pesquisa={{ urlencode($Nome) }}&tipo=&preco=" class="list-group-item list-group-item-action active">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $Nome }}</h5>
            <small>Hoje</small>
        </div>
        <p class="mb-1">
            Opa, Chegou a hora da troca!
        </p>
        <p>
            Que tal já realizar suas pesquisas?Faça isso em Serviços e Produtos.
        </p>
    </a>
</div>
