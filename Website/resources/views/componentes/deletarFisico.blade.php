
<div class="modal fade" id="deletarFisico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('deletarFisico') }}" method="POST">
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
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <input class="form-control" type="text" name="cpf" placeholder="CPF" data-mask="000.000.000-00">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <input class="form-control" type="password" name="senha" placeholder="Senha" minlength="6">
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
            </div>
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>
<!--
<script>
    function deletar(){
    Swal.fire({
        title: 'Deseja deletar sua conta no revise?',
        text: 'Obs.: Ao deletar a conta, os dados presentes serão deletados, sem recuperação de informações prevista no Termos de uso.',
        html:
            `<form action="{{ route('deletarFisico') }}" method="POST">
                @csrf
               @method('DELETE')                            
                <button type="submit" class="btn btn-warning">Deletar</button>
            </form>`,
        showConfirmButton: false,
        showCancelButton: true
    });
    }
</script>
-->
