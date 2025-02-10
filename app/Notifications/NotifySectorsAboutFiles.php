<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\File;

class NotifySectorsAboutFiles extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Instância do arquivo aprovado.
     *
     * @var \App\Models\File
     */
    protected $file;

    /**
     * Cria uma nova instância de notificação.
     *
     * @param \App\Models\File $file
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * Define os canais de entrega da notificação.
     *
     * @param object $notifiable
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Representação da notificação por e-mail.
     *
     * @param object $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Novo Arquivo Aprovado e Ativado')
            ->line('Um novo arquivo foi aprovado e ativado.')
            ->line('Detalhes do Arquivo:')
            ->line('Código: ' . $this->file->codigo)
            ->action('Acessar Gerenciador de Arquivos', route('dashboard'))
            ->line('Obrigado por utilizar nosso sistema!');
    }

    /**
     * Representação da notificação como array (opcional).
     *
     * @param object $notifiable
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'id' => $this->file->id,
            'codigo' => $this->file->codigo,
        ];
    }
}
