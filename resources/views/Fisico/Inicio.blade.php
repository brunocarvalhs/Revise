@extends('template/fisico')

@section('titulo','Início')

@section('menu_inicio','active')

@section('style')

@endsection

@section('sistema_fisico')
<div class="row p-3">
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 card shadow-sm">
                <h5 class="p-1 pt-3 mb-4">Status</h5>
                @foreach ($Andamentos as $Andamento)
                    @if(((($Andamento->qt_pecorrido - $Andamento->qt_medida) / $Andamento->qt_pecorrido ) * 100) >= 0 )
                        <div class="row p-1">
                            <div class="col-12">
                                @component('componentes.contagem')
                                    @slot('Nome',$Andamento->nm_peca)
                                    @slot('Placa',$Andamento->cd_placa)
                                    @slot('Quilometragem',$Andamento->qt_medida)
                                    @slot('Porcentagem', ((($Andamento->qt_pecorrido - $Andamento->qt_medida) / $Andamento->qt_pecorrido ) * 100) )
                                @endcomponent
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="row">
                    <div class="col-12 m-1 p-3 card shadow-sm">
                        <h5 class="mb-4">Veículos</h5>
                        <div class='container'>
                            <div class="row">
                                @foreach ($Veiculos as $Veiculo)
                                    @component('componentes.veiculos')
                                        @slot('placa',$Veiculo->placa)
                                        @slot('modelo',$Veiculo->modelo)
                                    @endcomponent
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-1 p-3 card shadow-sm">
                        <h5 class="mb-4">Notificação</h5>
                        @foreach ($Notificacoes as $Notificacao)
                            <div class="p-1">
                                @component('componentes.notificacao')
                                    @slot('Nome',$Notificacao->nm_peca)
                                    @slot('Placa',$Notificacao->cd_placa)
                                    @slot('Id',$Notificacao->cd_check)
                                    @slot('Data',$Notificacao->dt_check)
                                @endcomponent
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@include('componentes.quilometragem')
@endsection
