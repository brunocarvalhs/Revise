@extends('template/fisico')

@section('titulo','Veículos')

@section('menu_veiculos','active')



@section('style')

@endsection




@section('sistema_fisico')
<ul>
    @foreach ($Veiculos as $Veiculo)
        <li>{{ $Veiculo->placa }} - {{ $Veiculo->modelo }}</li>
    @endforeach
</ul>
@endsection




@section('script')

@endsection
