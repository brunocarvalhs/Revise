import { Injectable } from '@angular/core';
import { HTTP } from '@ionic-native/http/ngx';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor
    (
      private Http: HTTP
    ) {

  }

  url: string = 'http://18.229.136.80:8080';

  SignIn(l, s) {
    return this.Http.get(this.url + '/user?cpf=' + l + '&senha=' + s, {}, {});
  }


  ConsultaPlaca(placa) {
    return this.Http.get(this.url + '/placa/' + placa, {}, {});
  }

  Cadastro(nome, email, cpf, nascimento, senha, placa, modelo, ano, cor, plano) {
    let data = {
      'nome': nome,
      'email': email,
      'cpf': cpf,
      'nascimento': nascimento,
      'senha': senha,
      'placa': placa,
      'modelo': modelo,
      'ano': ano,
      'cor': cor,
      'plano': plano
    }

    return this.Http.post(this.url + '/userCadastro', { data }, {'Content-Type': 'application/json'});
  }

  VeiculoUser(id) {
    return this.Http.get(this.url + '/car?carId=' + id, {}, {});
  }

  DetalhesVeiculo(id) {
    return this.Http.get(this.url + '/carDetalhes?idCar=' + id, {}, {});
  }

}
