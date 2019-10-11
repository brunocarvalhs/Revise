<?php

namespace App\Mail;

use App\modelFisico;
use App\modelJuridico;
use App\modelUsuario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;

    public $Usuario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Usuario)
    {
        $this->Usuario = $Usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('componentes.email')
        ->with([
            'Usuario' => $this->Usuario,
        ]);
    }
}
