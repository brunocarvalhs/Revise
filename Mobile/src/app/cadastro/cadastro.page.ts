import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { UserService } from '../service/user.service';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.page.html',
  styleUrls: ['./cadastro.page.scss'],
})
export class CadastroPage implements OnInit {

  //Variaveis Globais
  minAno: string =  "1929";
  maxAno: string;

  data = new Date();

  //Variavel Usuario
  Nome: string = '';
  Email: string = '';
  Cpf: string = '';
  Nascimento: string = '';
  Senha: string = '';
  ConfSenha: string = '';
  Plano: string = '';
  
  //Variaveis Carro
  Placa: string = '';
  Modelo: string = '';
  Ano: string = '';
  Cor: string = '';
  Cidade: string = '';
  Estado: string = '';
  cadastroCarro: boolean = true;

  constructor
    (
      private router: Router,
      private servidor: UserService,
      private alertController: AlertController
    ) 
  {
    var dia = this.data.getDate();
    var mes = this.data.getMonth() + 1;
    var ano = this.data.getFullYear();
    this.maxAno = ano + '-' + mes + '-' + dia;
  }

  ngOnInit() {
  }

  //Função de mascara de login do Cpf ou cnpj
  MascaraCPF() {
    this.Cpf = this.Cpf.replace(/\D/g, "");
    this.Cpf = this.Cpf.replace(/(\d{3})(\d)/, "$1.$2");
    this.Cpf = this.Cpf.replace(/(\d{3})(\d)/, "$1.$2");
    this.Cpf = this.Cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
  }

  public planos = [
    {
      id: 1,
      nome: "Basic",
      descricao: "",
      preco: "Gratis"
    },
    {
      id: 2,
      nome: "Stard",
      descricao: "",
      preco: "9.99"
    },
    {
      id: 3,
      nome: "Profission",
      descricao: "",
      preco: "29.99"
    },
    {
      id: 4,
      nome: "Delux",
      descricao: "",
      preco: "99.99"
    }
  ];


  closeCadastro() {
    this.router.navigate(['/home']);
  }


  VerificarPlaca() {
    if (this.Placa.length == 7) {
      this.servidor.ConsultaPlaca(this.Placa).then((success) => {
        var dados = JSON.parse(success.data);
        this.Placa = dados.placa;
        this.Estado = dados.uf;
        this.Cidade = dados.municipio;
        this.Ano = dados.ano;
        this.Cor = dados.cor;
        this.Modelo = dados.modelo;
      });
    }
    else{
      this.Alert('Atenção', 'Campo de placa está incorreto, sendo formato correto XXX1111 sem caracter especial.');
    }
  }


  validarCampo() {
    this.cadastroUsuarioFisico();
    if (this.Nome != "") {
      if (this.Email != "") {
        if (this.Cpf.length > 0 && this.Cpf.length == 14) {
          if (this.Nascimento != "") {
            if (this.Senha != "") {
              if (this.ConfSenha != "") {
                if (this.Senha == this.ConfSenha) {
                  if(this.Placa.length >= 8){
                    if(this.Plano.length > 0){
                      this.cadastroUsuarioFisico();
                    }
                    else{
                      this.Alert('Atenção', 'Selecione um plano.');
                    }
                  }else{
                    this.Alert('Atenção', 'É necessario cadastra um veículo vinculado ao seu usuario.');
                  }
                } else {
                  this.Alert('Atenção', 'Senha não é igual ao campo Confirma Senha, necessario todos os campos está preenchido corretamente.');
                }
              } else {
                this.Alert('Atenção', 'Campo Confirma Senha está em branco, necessario todos os campos está preenchido corretamente.');
              }
            } else {
              this.Alert('Atenção', 'Campo Senha está em branco, necessario todos os campos está preenchido corretamente.');

            }
          } else {
            this.Alert('Atenção', 'Campo Data de nascimento está em branco, necessario todos os campos está preenchido corretamente.');
          }
        }
        else {
          this.Alert('Atenção', 'Campo CPF está em branco ou não está no padrão nascional, necessario todos os campos está preenchido corretamente.');
        }
      }
      else {
        this.Alert('Atenção', 'Campo E-mail está em branco, necessario todos os campos está preenchido corretamente.');
      }
    }
    else {
      this.Alert('Atenção', 'Campo Nome está em branco, necessario todos os campos está preenchido corretamente.');
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


  cadastroUsuarioFisico() {
    this.servidor.Cadastro(this.Nome, this.Email, this.Cpf, this.Nascimento, this.Senha, this.Placa, this.Modelo, this.Ano, this.Cor, this.Plano).then(result => {
      var res = JSON.parse(result.data);
      console.log(res);
      this.Alert('Atenção', res[0].Mensagem);
    }).catch(erro => {
      this.Alert('Error', erro);
    });
  }
}
