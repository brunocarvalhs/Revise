@extends('template/fisico')

@section('titulo','Perfil')

@section('menu_perfil','active')



@section('style')

@endsection



@section('sistema_fisico')
<div class="card perfil">
    <div class="card-body">
        <div class="card-body">
            <form action="" method="POST" onsubmit="">
                <!--Perfil Usuario Fisico-->
                <div class="row">
                    <div class="col-12">
                        <!-- Nome completo -->
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="campoNome" class="text-warning">Nome completo</label>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" class="form-control" id="campoNome" value="{{ $Perfil->Nome }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="form-group inputCadastro">
                            <label for="exampleFormControlInput1" class="text-warning">Endereço de
                                email</label>
                            <input type="email" class="form-control" id="campoEmail" value="{{ $Perfil->Email }}"
                                readonly>
                        </div>
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <!-- CPF -->
                                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                    <label for="exampleFormControlInput1" class="text-warning">CPF</label>
                                    <input type="text" class="form-control" id="campoDoCpf" placeholder="xxx.xxx.xxx-xx"
                                        data-mask="000.000.000-00" value="{{ $Perfil->CPF }}" readonly>
                                </div>
                                <!-- Data de nascimento -->
                                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                    <label for="exampleFormControlInput1" class="text-warning">Data
                                        de nascimento</label>
                                    <input type="date" class="form-control" id="campoDeNascimento"
                                        value="{{ $Perfil->Nascimento }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group inputCadastro col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 semPadding">
                            <div class="form-row">
                                <div class="col-12">
                                    <label class="text-warning">Planos</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" value='{{ $Perfil->Plano }}' readonly>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="txtPlano" name="txtPlano"
                                    aria-label="Exemplo de select com botão addon" hidden>
                                    <option value="">Basic</option>
                                    <option value="">Standart</option>
                                    <option value="">Profission</option>
                                    <option value="">Deluxe Edition</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Botões para alteração-->
                <br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="display: block;" id="btn_off">
                        <button type="button" class="btn btn-outline-warning btn-block" onclick="btnPerfil()">Alterar
                            dados</button>
                    </div>
                    <!--Botões escondidos-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" style="display: none;" id="btn_hidden">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <button type="button" class="btn btn-success btn-block"
                                    onclick="Salvar()">Salvar</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <button type="button" class="btn btn-danger btn-block"
                                    onclick="Cancelar()">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card mt-5">
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <h4>Mensalidade</h4>
            </div>
        </div>
        <div id="list" class="row mt-5">
            <div class="table-responsive col-md-12">
                <table class="table table-striped shadow-sm p-3 mb-5 rounded" cellspacing="0" cellpadding="0">
                    <thead class="shadow">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Mês</th>
                            <th scope="col">Vencimento</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estado</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="mt-5">
                        @foreach ($Mensalidades as $Mensalidade)
                            <tr>
                                <td scope="row">
                                <form action="{{ url('/Painel/Anuncios',['boleto' => $Mensalidade->ID]) }}" method="POST">
                                <td>{{ $Mensalidade->mes }}</td>
                                <td>{{ $Mensalidade->vencimento }}</td>
                                <td>R$ {{ $Mensalidade->valor }}</td>
                                @if($Mensalidade->estado > 0)
                                    <td>Em Aberto</td>
                                @else
                                    <td>Vencido</td>
                                @endif
                                <td class="actions">
                                @if($Mensalidade->estado <= 0)
                                    <button type="submit" class="btn btn-danger">Gerar Boleto</button>
                                    @method('POST')
                                    @csrf
                                @endif
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection



@section('script')


@endsection
