<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $account_type, $encrypt)
    {
        //
        $this->name = $name ;
        $this->account_type = $account_type ;
        $this->encrypt = $encrypt ;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.activation_account', [
            "name" => $this->name,
            "account_type" => $this->account_type,
            "encrypt" => $this->encrypt,

        ]);
    }
}
