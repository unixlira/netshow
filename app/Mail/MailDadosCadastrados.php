<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailDadosCadastrados extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.dados')->with(
            [
                'nome'=>$this->contact->nome,
                'email'=>$this->contact->email,
                'telefone'=>$this->contact->telefone,
                'mensagem'=>$this->contact->mensagem,
                'arquivo'=>$this->contact->arquivo,
                'ip'=>$this->contact->ip,
                'created_at'=>$this->contact->created_at,
            ]
        )->subject('Dados Cadastrados no Form Teste');
    }
}
