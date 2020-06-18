import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';
import { UserService } from '../service/user.service';
import { StatusBar } from '@ionic-native/status-bar/ngx';
import { NativeStorage } from '@ionic-native/native-storage/ngx';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {


  constructor
    (
      private router: Router,
      private alertController: AlertController,
      private servidor: UserService,
      private statusBar: StatusBar,
      private storage: NativeStorage
    ) {
    this.statusBar.styleBlackTranslucent();
    this.statusBar.styleLightContent();
    setTimeout(() => {
      document.getElementById('divLogin').hidden = false;
      document.getElementById('loadingSistema').hidden = true;
    }, 1000);
  }

  //Variaveis 
  Cpf: string = '';
  Senha: string = '';

  //Função de mascara de login do Cpf ou cnpj
  MascaraCPF() {
    this.Cpf = this.Cpf.replace(/\D/g, "");
    this.Cpf = this.Cpf.replace(/(\d{3})(\d)/, "$1.$2");
    this.Cpf = this.Cpf.replace(/(\d{3})(\d)/, "$1.$2");
    this.Cpf = this.Cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
  }

  //Redirecionamento de login
  logIn() {
    if (this.Cpf != '' && this.Senha != '') {
      if (this.Cpf.length > 0 && this.Cpf.length == 14) {
        if (this.Senha.length > 0) {
          this.ValidarLoginApp();
        }
        else {
          this.Alert('Atenção', 'Campo de Senha em branco, preencha corretamente os campos.');
        }
      } else {
        this.Alert('Atenção', 'Campo de CPF em branco, preencha corretamente os campos.');
      }
    } else {
      this.Alert('Atenção', 'Os campos estão em branco, preencha corretamente os campos.');
    }
  }

  //Alerta
  async Alert(Tipo, Texto) {
    const alert = await this.alertController.create({
      header: Tipo,
      message: Texto,
      buttons: ['OK']
    });
    await alert.present();
  }

  /**
   * Manipulação de classes
   */
  TrocaClasse(elemento, antigo, novo) {
    elemento.classList.remove(antigo);
    elemento.classList.add(novo);
  }

  /**
   * Animação de entrada da 
   * div dos dados do login
   */
  inLogin() {
    var div = document.getElementById('divLogin');
    this.TrocaClasse(div, 'fadeOutDownBig', 'fadeInUpBig');
    setTimeout(() => {
      document.getElementById('divLogin').hidden = false;
      document.getElementById('loadingSistema').hidden = true;
    }, 1000);
  }

  /**
   * Animação de saida da 
   * div dos dados do veiculo
   */
  outLogin() {
    var div = document.getElementById('divLogin');
    this.TrocaClasse(div, 'fadeInUpBig', 'fadeOutDownBig');
    setTimeout(() => {
      document.getElementById('divLogin').hidden = true;
      document.getElementById('loadingSistema').hidden = false;
    }, 1000);
  }

  /**
   * Tratamento do CPF
   * 
   * @param CPF
   * @return CPF tratado
   */
  tratarCpf(CPF) {
    return CPF.replace(/\D/g, "");
  }


  /**
   * Metodo de login 
   * 
   * 
   * @returns Void 
   */
  ValidarLoginApp() {

    setTimeout(() => {

      this.outLogin();

      document.getElementById('loadingSistema').hidden = false;

      var CPF = this.tratarCpf(this.Cpf);

      var SENHA = this.Senha;

      setTimeout(() => {

        this.servidor.SignIn(CPF, SENHA).then(response => {

          var data = JSON.parse(response.data);

          if (data.user[0].CPF == CPF && data.user[0].Senha == SENHA) {

            this.storage.setItem('user', data.user[0]).then(success => {
              console.log('Salvo');
            }).catch(erro => {
              console.log(erro);
            });

            this.inLogin();

            this.router.navigate(['/sistema']);
          } else {

            this.inLogin();

            this.Alert('Atenção', 'Usuario não encontrado, verifique CPF ou Senha estão corretos.');

          }

        }).catch(falha => {

          this.inLogin();

          switch (falha.status) {
            case 0: { this.Alert('Erro', 'Login inexistente, cadastre-se.'); break; }
            case 400: { this.Alert('Erro', 'Sintaxe inválida, tente novamente, se o erro persistir entre em contato com o suporte. contato@Revise.br'); break; }
            case 503: { this.Alert('Erro', 'Servidor em manutenção, por favor tente mais tarde.'); break; }
            default: { this.Alert('Erro', 'Erro encontrado: ' + falha.error); break; }
          }
          document.getElementById('loadingSistema').hidden = true;

        });

      }, 1000);
    }, 500);
  }

  routerCadastro() {
    this.router.navigate(['/cadastro']);
  }
}
