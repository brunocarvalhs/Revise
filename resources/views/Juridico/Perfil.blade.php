@extends('template\juridico')

@section('titulo','Perfil')

@section('menu_perfil','active')




@section('style')

@endsection




@section('sistema_juridico')
<div class="card perfil">
    <div class="card-up lighten-1 PerfilCard perfilBackgroud"></div>
    <div class="avatar mx-auto row">
        <div class="col">
            <img src="{{ asset('img/user.jpg') }}" width="250" height="250" class="rounded-circle" alt="woman avatar">
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
            <form action="" method="POST" onsubmit="">
                <!--Perfil Usuario Fisico-->
                <div class="row">
                    <div class="col-12">
                        <!-- Nome Fantasia -->
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="campoNome" class="text-warning">Nome Fantasia</label>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" class="form-control" id="campoNome" value="{{ $Dados->Fantasia }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="campoNome" class="text-warning">Razão Social</label>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" class="form-control" id="campoNome" value="{{ $Dados->Razao }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <!-- E-mail -->
                                <div class="col-12 col-sm-12 col-md col-lg-6 col-xl-6">
                                    <label for="exampleFormControlInput1" class="text-warning">Endereço de
                                        email</label>
                                    <input type="email" class="form-control" id="campoEmail" value="{{ $Dados->Email }}" readonly>
                                </div>
                                <!-- CNPJ -->
                                <div class="col-12 col-sm-12 col-md col-lg-6 col-xl-6">
                                    <label for="exampleFormControlInput1" class="text-warning">CNPJ</label>
                                    <input type="text" class="form-control" id="campoDoCpf" placeholder="" data-mask="00.000.000/0000-00"
                                        value="{{ $Dados->CNPJ }}" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="form-group inputCadastro">
                                <label for="inputAddress" class="text-warning">Endereço</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="" readonly value="{{ $Dados->Endereco }} - {{ $Dados->Bairro }}">
                            </div>
                            <div class="form-row inputCadastro">
                                <div class="form-group col-md-4">
                                    <label for="inputCity" class="text-warning">Cidade</label>
                                    <input type="text" class="form-control" id="inputCity" readonly value="{{ $Dados->Cidade }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEstado" class="text-warning">Estado</label>
                                    <input type="text" class="form-control" id="inputCity" readonly value="{{ $Dados->Estado }}">
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="inputEstado" class="text-warning">Pais</label>
                                        <input type="text" class="form-control" id="inputCity" value="Brasil" readonly>
                                        </select>
                                    </div>
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
@endsection




@section('script')

@endsection
