<div class="modal fade" id="modelProduto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('anuncio') }}" onsubmit="" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Adicionar Produto</h4>
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
                                            <label for="disabledTextInput">Produto</label>
                                            <input type="text" id="txtAnuncio" name="txtAnuncio" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang" lang="es"
                                                name="fileAnuncio">
                                            <label class="custom-file-label" for="customFileLang">Seleccionar
                                                foto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="disabledTextInput">Descrição</label>
                                        <textarea type="text" id="txtDescricao" name="txtDescricao" class="form-control"
                                            placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="rowPreco">
                                <div class="col-12">
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">R$</span>
                                        </div>
                                        <input type="text" class="form-control money_example"
                                            aria-label="Preço" id="txtPreco" name="txtPreco">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="modal-footer d-flex justify-content-center bg-warning mt-3 btn btn-default bg-warning" type="submit">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>
