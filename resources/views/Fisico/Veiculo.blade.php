@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>
.card {
  background-color: #fff;
  min-width: 100%;
  min-height: 200px;
}
.card {display: flex}
.card {
  overflow-x: auto;
}
.card::-webkit-scrollbar {
  display: none;
}
.card--content {
  background-color: #e74c3c;
  min-width: 200px;
  margin: 5px;
}
</style>
@endsection




@section('sistema_fisico')
<div class="row">
    <div>
        <ul class="hs">
            @foreach ($Veiculos as $Veiculo)
                <li>
                    <div class="card">
                        {{ $Veiculo->placa }} / {{ $Veiculo->modelo }}
                    </div>
                </li>
            @endforeach
        </ul>
  </div>
</div>
<div class="row">
    <section class="card">
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
        <div class="card--content"></div>
    </section>
</div>
@endsection




@section('script')

@endsection
