<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\File;

class FileApprovedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $file;

    /**
     * Create a new message instance.
     *
     * @param  mixed  $file
     */
    public function __construct($file)
    {
        $this->file = $file; // Armazena o arquivo na propriedade pública
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo Arquivo Aprovado e Ativado', // Defina o assunto do e-mail
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.email', // Substitua por uma view válida
            with: ['file' => $this->file] // Passe o arquivo para a view
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
