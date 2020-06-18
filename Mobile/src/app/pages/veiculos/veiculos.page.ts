import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NativeStorage } from '@ionic-native/native-storage/ngx';
import { AlertController } from '@ionic/angular';
import { UserService } from 'src/app/service/user.service';

@Component({
  selector: 'app-veiculos',
  templateUrl: './veiculos.page.html',
  styleUrls: ['./veiculos.page.scss'],
})
export class VeiculosPage implements OnInit {

  qtVeiculo: string;
  idUser: string;
  txtPlaca: string;
  txtModelo: string;
  txtMarca: string;
  txtAno: string;
  txtCor: string;

  constructor
    (
      private router: Router,
      private storage: NativeStorage,
      private alertController: AlertController,
      private servidor: UserService,
  ) {
    this.storage.getItem('user').then(data => {
      this.idUser = data.Usuario;
      this.qtVeiculo = data.QuantidadeVeiculo;
      this.servidor.VeiculoUser(this.idUser).then(result => {
        console.log(result.data);
        var veiculos = JSON.parse(result.data);
        console.log(veiculos);
        this.carros = veiculos;
      }).catch(erro => {
        console.log(erro);
        this.router.navigate(['/home']);
      });
    }).catch(erro => {
      console.log(erro);
      this.router.navigate(['/home']);
    });
    this.VeiculosUsuario();
  }

  ngOnInit() {
  }

  public slideOpcoes = {
    initialSlide: 0,
  };

  public carros;

  realizarCheckList() {
    this.router.navigate(['checklist']);
  }

  adicionarVeiculo() {
    this.router.navigate(['add-veiculo']);
  }

  VeiculosUsuario(){
    this.servidor.VeiculoUser(this.idUser).then(result => {
      console.log(result.data);
      var veiculos = JSON.parse(result.data);
      console.log(veiculos);
      this.carros = veiculos;

    }).catch(erro => {
      console.log(erro);
      this.router.navigate(['/home']);
    });
  }

  selecionaCarro(id){
    this.servidor.DetalhesVeiculo(id).then(resultado => {
      var detalhes = JSON.parse(resultado.data);
      console.log(detalhes);
      this.txtPlaca = detalhes[0].Placa;
      this.txtModelo = detalhes[0].Modelo;
      this.txtMarca = detalhes[0].Marca;
      this.txtAno = detalhes[0].Ano;
      this.txtCor = detalhes[0].Cor;
    }).catch(erro => {
      console.log(erro);
      this.router.navigate(['/home']);
    });
  }

  doRefresh(event){
    this.VeiculosUsuario();
    event.target.complete();
  }

  alterarVeiculo(){

  }

  deletarVeiculo(){
    
  }
}
