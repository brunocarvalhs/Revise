<?php

namespace App;

use App\Mail\SendMailUser;
use Illuminate\Support\Facades\Mail;
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
        $destino = $Email;

        $enviaremail = Mail::to($destino)->send(new SendMailUser($Contudo));

        if ($enviaremail) {
            return json_encode(['Status' => true, 'Mensagem' => "E-MAIL ENVIADO COM SUCESSO! O link será enviado para o e-mail fornecido no formulário"]);
        } else {
            return json_encode(['Status' => false, 'Mensagem' => "ERRO AO ENVIAR E-MAIL!"]);
        }
    }
}
