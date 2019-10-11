<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelUsuario extends Model
{
    private $IdUsuario;
    private $Email;
    private $Senha;

    /**
     * Get the value of IdUsuario
     */
    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    /**
     * Set the value of IdUsuario
     *
     * @return  self
     */
    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Senha
     */
    public function getSenha()
    {
        return $this->Senha;
    }

    /**
     * Set the value of Senha
     *
     * @return  self
     */
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

        return $this;
    }

    public function ValidarCampos(Request $request)
    {
        $r = $request->all();
        foreach ($r as $value => $key) {
            if (empty($key)) {
                return false;
            }
        }
        return true;
    }


    public function Email($Email, $Assunto, $Contudo)
    {
        $emailenviar = "seuemail@seudominio.com.br";
        $destino = $Email;
        $assunto = $Assunto;

        // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: $nome <$email>';
        //$headers .= "Bcc: $EmailPadrao\r\n";

        $arquivo = `<html>
        <head>
            <title>Email Revise</title>
        </head>
        <body>
            <table>
                <tr>
                    <td align="center">Revise</td>
                </tr>
                <tr>
                    <td>`.$Contudo.`</td>
                </tr>
                <tr>
                    <td align="center"></td>
                </tr>
            </table>
        </body>
        </html>`;

        $enviaremail = mail($destino, $assunto, $arquivo, $headers);

        if ($enviaremail) {
            return json_encode(['Status' => true, 'Mensagem' => "E-MAIL ENVIADO COM SUCESSO! O link será enviado para o e-mail fornecido no formulário"]);
        } else {
            return json_encode(['Status' => false, 'Mensagem' => "ERRO AO ENVIAR E-MAIL!"]);
        }
    }
}
