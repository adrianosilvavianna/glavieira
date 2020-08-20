<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeFast extends Mailable
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

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(env('MAIL_FROM_ADDRESS', 'glavieirastudio@gmail.com'))
            ->subject('Contato para Parceria')
            ->markdown('emails.subscribe_fast', [
                'email' => $this->request->email,
                'number' => $this->request->number,
                'link'=> $this->request->links
            ]);
    }
}
