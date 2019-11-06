<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('veiculo') }}" onsubmit="" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Dados do veículo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="disabledTextInput">Placa</label>
                                            <input type="text" id="txtplaca" maxlength="8" name="txtplaca"
                                                class="form-control" placeholder="" data-mask="SSS-0000">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="button" onclick="consultar();" id="buscaPlaca"
                                                class="btn btn-warning">Pesquisar Placa</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="disabledTextInput">Marca/Modelo</label>
                                <input type="text" readonly="true" class="form-control" id="txtMarca" name="txtMarca"
                                    placeholder="">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="anoVeiculo">Ano</label>
                                    <input type="text" readonly="true" class="form-control" id="txtAno" name="txtAno"
                                        placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="corVeiculo">Cor</label>
                                    <input type="text" readonly="true" class="form-control" id="txtCor" name="txtCor"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-7">
                                    <label for="cidadeVeiculo">Cidade</label>
                                    <input type="text" readonly="true" class="form-control" id="txtCidade"
                                        name="txtCidade" placeholder="Cidade">
                                </div>
                                <div class="col">
                                    <label for="estadoVeiculo">Estado</label>
                                    <input type="text" readonly="true" class="form-control" id="txtEstado"
                                        name="txtEstado" placeholder="Estado">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="disabledTextInput">RENAVAN</label>
                                    <input type="text" class="form-control" id="txtRenavan" name="txtRenavan"
                                        placeholder="">
                                </div>
                                <div class="col">
                                    <label for="disabledTextInput">Quilometragem</label>
                                    <input type="text" class="form-control" id="txtQuilometragem" name="txtQuilometragem" data-mask="000000000"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="modal-footer d-flex justify-content-center bg-warning text-white btn-warning mt-3" type="submit">
                    <h5>Cadastrar</h5>
                </button>
            </div>
        </form>
    </div>
</div>
