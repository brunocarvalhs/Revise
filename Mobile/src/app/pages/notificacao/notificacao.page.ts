import { Component, OnInit } from '@angular/core';
import { LocalNotifications } from '@ionic-native/local-notifications/ngx';
import { Router } from '@angular/router';
import { UserService } from 'src/app/service/user.service';
import { NativeStorage } from '@ionic-native/native-storage/ngx';
import { HTTP } from '@ionic-native/http/ngx';

@Component({
  selector: 'app-notificacao',
  templateUrl: './notificacao.page.html',
  styleUrls: ['./notificacao.page.scss'],
})
export class NotificacaoPage implements OnInit {

  idUser: string;
  idCarroSelecionado: string;
  
  public carros;

  public notificacoes;

  constructor
  (
    private LocalNotificacao: LocalNotifications,
    private router: Router, 
    private servidor: UserService,
    private storage: NativeStorage,
    private Http: HTTP
    ) 
  {
    this.storage.getItem('user').then(data => {
      this.idUser = data.Usuario;
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
  }

  ngOnInit() {
  }


  detalhesNotificacao(){
    this.router.navigate(['/detalhes']);
  }

  notificacoesVeiculo(id){
    this.idCarroSelecionado = id;
    this.Http.get(this.servidor.url + '/not?idCar=' + id, {}, {}).then(notificacao => {
      notificacao = JSON.parse(notificacao.data);
      this.notificacoes = notificacao;
      console.log(notificacao);
      console.log(this.notificacoes);
    });
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

  doRefresh(event){
    this.notificacoesVeiculo(this.idCarroSelecionado);
    event.target.complete();
  }
}
