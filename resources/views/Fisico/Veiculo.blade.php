@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')
<link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
@endsection




@section('sistema_fisico')
<ul>
    @foreach ($Veiculos as $Veiculo)
        <li>{{ $Veiculo->placa }} - {{ $Veiculo->modelo }}</li>
    @endforeach
</ul>
<div class="row row-horizon">
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <div class="container-fluid">
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
    </div>
</div>
@endsection




@section('script')
<script>

</script>
@endsection
