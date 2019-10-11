@extends('template/padrao')

@section('titulo', 'Cadastro')

@section('conteudo')
<!-- Titulo do cadastro -->
<section>
    <div class=" backgroundBlackLight espaco">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro Jurídico</h1>
            </div>
        </div>
        <!-- Barra de progresso -->
        <div class="progress bg-dark">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <!--Inicio dos Forms-->
    <div class="backgroundBlackLight">
        <!--Form dados da empresa-->
        <form action="{{ url('/CadastroJuridico') }}" method="POST" onsubmit="return ValidarCadastroJuridico()" name="CadastroJuridico">
            @csrf
            <div class="row">
                <div class="col-12">
                    <h4>Dados da Empresa</h4>
                </div>
            </div>
            <div class="row formularioCadastro">
                <div class="col-12">
                    <!-- Nome Empresa -->
                    <div class="form-group inputCadastro">
                        <div class="form-row">
                            <div class="col-12">
                                <label for="campoNome">Nome da Empresa</label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="text" class="form-control" id="razaoSocial" placeholder="Razão Social" title="Razão Social é o nome de registro da sua empresa,
que consta em documentos legais e é usado em termos formais" name="razaoSocial">
                            </div>
                            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                <input type="text" class="form-control" id="nomeFantasia" placeholder="Nome Fantasia" data-toggle="tooltip" data-placement="top" title="É o nome popular de uma empresa, ou seja, como é conhecida.
    Pode ou não ser igual à sua razão social" name="nomeFantasia">
                            </div>
                        </div>
                        <!--Endereço empresa-->
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <label>Endereço</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="disabledTextInput">CEP</label>
                                                <input type="text" id="txtCEP" maxlength="8" name="txtCEP" class="form-control" data-mask="00000-000" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" onclick="consultarCep();" id="buscaCEP" class="btn btn-warning">Pesquisar CEP</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-row inputCadastro">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <input type="text" readonly="true" class="form-control" id="txtEstado" name="txtEstado" placeholder="Estado">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <input type="text" readonly="true" class="form-control" id="txtCidade" name="txtCidade" placeholder="Cidade">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                                        <div class="form-group inputCadastro">
                                            <input type="text" readonly="true" class="form-control" id="txtBairro" name="txtBairro" placeholder="Bairro">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group inputCadastro">
                                            <input type="text" readonly="true" class="form-control" id="txtRua" name="txtRua" placeholder="Rua">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                        <div class="form-group inputCadastro">
                                            <input type="text" class="form-control somente-numero" id="txtNumero" name="txtNumero" placeholder="Número" data-mask="000000" >
                                        </div>
                                    </div>
                                    <!--FIM-->
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="form-group inputCadastro">
                            <label for="exampleFormControlInput1">Endereço de email</label>
                            <input type="email" class="form-control" id="campoEmail" name="campoEmail" required="" placeholder="nome@exemplo.com">
                        </div>
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <!-- CNPJ -->
                                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                    <label for="exampleFormControlInput1">CNPJ</label>
                                    <input type="text" class="form-control" data-mask="00.000.000/0000-00" name="txtcnpj" id="txtcnpj" placeholder="XX.XXX.XXX/YYYY-ZZ">
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Senha -->
                    <div class="form-group inputCadastro">
                        <label for="campoSenha">Senha</label>
                        <input type="password" id="campoSenha" class="form-control" name="campoSenha" aria-describedby="descricaoSenha">
                        <small id="descricaoSenha" class="form-text text-muted">
                            Sua senha deve ter entre 6 e 20 caracteres, os quais devem ser letras e números,
                            sem
                            espaços, caracteres especiais ou emojis.
                        </small>
                    </div>
                    <!-- Confirma senha -->
                    <div class="form-group inputCadastro">
                        <label for="campoSenha">Confirmar senha</label>
                        <input type="password" id="campoConfirmaSenha" name="campoConfirmaSenha" class="form-control" aria-describedby="descricaoSenha">
                    </div>

                    <!--Botão-->
                    <br><br>
                    <div class="row">
                        <div class="col-0 col-sm-0 col-md-0 col-lg-8 col-xl-8"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <button class="btn btn-warning btn-block" id="btnContinua" type="submit">Finalizar</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
</form>
</section>
@endsection

@section('script')
<script src="{{ asset('js/API.js')}}"></script>
<script src="{{ asset('js/validation/CadastroJuridico.js')}}"></script>
@endsection

@section('mensagem')
@if(session()->has('Cadastro'))
    @if(session()->get('Cadastro')->Status)
        @component('componentes.alert')
            @slot('title')
                Forbidden
            @endslot
        @endcomponent
    @else
        @component('')

        @endcomponent
    @endif
            <!--echo '<script>
                    swal("SUCESSO","'.session()->get('Cadastro')->Mensagem.'", {
                    icon: "success",
                    buttons: false,
                    timer: 3000,
                    });
                    </script>';
        }
        else{
            echo '<script>
                    swal("ERRO","'.session()->get('Cadastro')->Mensagem.'", {
                    icon: "error",
                    buttons: false,
                    timer: 3000,
                    });
                </script>';
        }
@endif
@endsection
