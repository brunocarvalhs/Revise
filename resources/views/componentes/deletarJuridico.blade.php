<div class="modal fade" id="modelDeletarUsuarioFisico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('deletarJuridico') }}" method="POST">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100">Deseja deletar sua conta do revise? </h4>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="cnpj" placeholder="CNPJ" data-mask="000.000.000-00">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="col-6">
                                            <input type="password" name="senha" placeholder="Senha" minlength="6">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <button class="modal-footer d-flex justify-content-center bg-danger mt-3 btn btn-default bg-danger"
                    type="submit">
                    <h5 class="text-white">Deletar</h5>
                </button>
                @csrf
                @method('DELETE')
            </div>
        </form>
    </div>
</div>
