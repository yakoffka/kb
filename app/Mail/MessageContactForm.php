<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public array $messageData;

    /**
     * Create a new message instance.
     *
     * @param array $messageData
     */
    public function __construct(array $messageData)
    {
        $this->messageData = $messageData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->markdown('emails.message_contact_form');
    }
}
