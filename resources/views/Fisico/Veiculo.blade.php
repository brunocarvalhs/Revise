@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>
.card {
  background-color: #fff;
  min-width: 100%;
  min-height: 200px;
  display: none;
  overflow-x: auto
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
    <section class="card">
        @foreach ($Veiculos as $Veiculo)
            <div class="card--content">
                {{ $Veiculo->placa }} / {{ $Veiculo->modelo }}
            </div>
        @endforeach
    </section>
</div>
@endsection




@section('script')

@endsection
