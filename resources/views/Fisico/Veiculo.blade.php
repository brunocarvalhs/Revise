@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>
    .card-body {
    min-height: 300px;
    min-width: 300px;
    margin-right: 5px;
}
</style>
<link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
@endsection




@section('sistema_fisico')
<div class="container-fluid">
    <div class="d-flex flex-row flex-nowrap">
        <div class="card card-body">Card</div>
            @foreach ($Veiculos as $Veiculo)
                <div class="card card-body">
                    {{ $Veiculo->placa }} - {{ $Veiculo->modelo }}
                </div>
            @endforeach
        </div>
    </div>
@endsection




@section('script')
<script>

</script>
@endsection
