import Swal from "sweetalert2";

function DeletarFisico() {

}

function DeletarJurido() {
      Swal.fire({
            title: 'Inserir quilometragem de (' + placa + ')',
            text: 'Obs.: Insira o valor correto da quilometragem! É de total responsabilidade do usuário a autencidade da quilometragem',
            html:
                  `<form method="GET" action="{{ route('quilomatragem') }}/${placa}">
                            <input id="swal-input2" name="KM" class="swal2-input">
                            <button type="submit" class="btn btn-warning">Registrar</button>
                        </form>`,
            showConfirmButton: false,
            showCancelButton: true
      });
}