import { Component, OnInit } from '@angular/core';
import { AlertController } from '@ionic/angular';
import { Router } from '@angular/router';
import { NativeStorage } from '@ionic-native/native-storage/ngx';

@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.page.html',
  styleUrls: ['./perfil.page.scss'],
})
export class PerfilPage implements OnInit {

  inputDisabled: boolean = true;
  txtNome: string;
  txtCpf: string;
  txtEmail: string;
  txtNascimento: string;
  txtPlano: string;
  
  private senha: string;
  
  constructor
    (
      private alertController: AlertController,
      private router: Router,
      private storage: NativeStorage
    ) {
      this.storage.getItem('user').then(data => {
        console.log(data);
        this.txtNome = data.Nome;
        this.txtCpf = data.CPF;
        this.txtEmail = data.Email;
        this.txtNascimento = data.Nascimento;
        this.txtPlano = data.Plano;
        this.senha = data.Senha;
      }).catch(erro => {
        console.log(erro);
        this.router.navigate(['/home']);
      });
  }

  ngOnInit() {
  }

  alterarPerfil() {
    this.inputDisabled = false;
  }

  salvaPerfil() {
    this.inputDisabled = true;
  }

  deletarPerfil() {
    this.presentAlertPrompt();
  }



  async presentAlertPrompt() {
    const alert = await this.alertController.create({
      header: 'Deseja realmente deletar sua conta?',
      message: 'Insira sua senha para confirma o desejo de detelar a conta...',
      inputs: [
        {
          name: 'Senha',
          type: 'password',
        }],
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel',
          cssClass: 'secondary',
        }, {
          text: 'Ok',
          handler: (data) => {

            if(data.Senha == this.senha)
            {
              this.router.navigate(['/home']);
            }
            else{
              this.presentAlertPrompt();
            }
          }
        }
      ]
    });

    await alert.present();
  }


  public planos = [
    {
      nome: "Basic",
      descricao: "",
      preco: "Gratis"
    },
    {
      nome: "Stard",
      descricao: "",
      preco: "9.99"
    },
    {
      nome: "Profission",
      descricao: "",
      preco: "29.99"
    },
    {
      nome: "Delux",
      descricao: "",
      preco: "99.99"
    }
  ];

  planoAlterar(nome){
    console.log(nome);
  }

  exitApp(){
    this.storage.clear().then(() => {
      this.router.navigate(['/home']);
    }).catch(() => {
      this.router.navigate(['/home']);
    });
  }
}
