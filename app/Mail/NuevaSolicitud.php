<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NuevaSolicitud extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $datos)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva solicitud de maqueta: ' . $this->datos['negocio'],
            replyTo: ! empty($this->datos['email'])
                ? [new Address($this->datos['email'], $this->datos['nombre'])]
                : [],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.nueva-solicitud');
    }
}
