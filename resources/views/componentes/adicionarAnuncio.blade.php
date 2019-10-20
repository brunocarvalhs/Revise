<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('anuncio') }}" onsubmit="" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Adicionar Anuncio</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="row">
                        <div class="col-12">
                            <fieldset>

                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center bg-warning mt-3" type="submit">
                    <button type="submit" class="btn btn-default bg-warning">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
