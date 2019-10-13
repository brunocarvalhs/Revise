@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<style>
    .card-block {
        min-height: 300px;
    }
</style>
@endsection




@section('sistema_fisico')
<ul>
    @foreach ($Veiculos as $Veiculo)
        <li>{{ $Veiculo->placa }} - {{ $Veiculo->modelo }}</li>
    @endforeach
</ul>
<div class="container-fluid">
        <h2>Bootstrap Horizontal Scrolling with Flexbox</h2>
        <div class="row flex-nowrap">
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
            <div class="col-3">
                <div class="card card-block">Card</div>
            </div>
        </div>
    </div>
@endsection




@section('script')
<script>

</script>
@endsection
