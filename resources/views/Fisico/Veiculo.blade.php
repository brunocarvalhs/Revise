@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>
.app {
    display: grid;
    grid-template-columns: 20px 1fr 20px;
}

.app>* {
    grid-column: 2 / -2;
}

.app>.full {
    grid-column: 1 / -1;
}

.hs {
    display: grid;
    grid-gap: 10px;
    grid-template-columns: repeat(6, calc(50% - 40px));
    grid-template-rows: minmax(150px, 1fr);
}
</style>
@endsection




@section('sistema_fisico')
<div class="row">
    <div class="app">
        <ul class="hs">
            @foreach ($Veiculos as $Veiculo)
                <li>{{ $Veiculo->placa }} / {{ $Veiculo->modelo }}</li>
            @endforeach
        </ul>
  </div>
</div>
@endsection




@section('script')

@endsection
