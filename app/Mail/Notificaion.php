<?php

namespace App\Mail;

use App\Models\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notificaion extends Mailable
{
    use Queueable, SerializesModels;

    public $registro;

    public function __construct(Form $form)
    {
        $this->registro = $form;
    }

    public function build()
    {
        return $this->view('mail.confirmacion');
    }
}
