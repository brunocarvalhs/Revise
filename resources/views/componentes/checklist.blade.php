<div class="modal fade" id="modelChecklist" tabindex="-1" role="dialog" aria-labelledby="modelChecklist"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" onsubmit="" method="POST">
            @csrf
            <input type="hidden" name="txtTipo" value="Serviço">
            <div class="modal-content">
                <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Checklist - {{ $placa }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="row">
                        <div class="col-12">







                        </div>
                    </div>
                </div>
                <button class="modal-footer d-flex justify-content-center bg-warning mt-3 btn btn-default bg-warning" type="submit">
                    <h5 class="text-white">Registrar</h5>
                </button>
            </div>
        </form>
    </div>
</div>
