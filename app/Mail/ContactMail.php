<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**P
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->request->email)
                    ->subject($this->request->name . ' Te enviou um contato')
                    ->markdown('emails.contact', 
                    [
                        'name' => $this->request->name,
                        'email' => $this->request->email,
                        'subject' => $this->request->subject,
                        'message'=> $this->request->message,
                        'number' => $this->request->number,
                        'slot' => 'Agradecemos seu contato'
                    ]
                );
    }
}
