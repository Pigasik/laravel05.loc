<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //public $mailMessage;
    public $mailMessage;
    public $emailFriend;
     public function __construct($message, $email)
    {
        
        $this->mailMessage = $message;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // bcc скрытые
        // cc для нескольких мылов
        return $this->from('v_pigasova@mail.ru', 'Veronika')
        ->to('vpigasova96@gmail.com')
        //->
        ->view('emails.first')
        ->with([
            'mailMessage' => $this->mailMessage
        ]);
    }
}
