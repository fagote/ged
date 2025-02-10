<?php

namespace App\Listeners;

use App\Events\FileApproved;
use App\Models\Sector;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\FileApprovedEmail;

class SendEmailOnFileApproved implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Cria o event listener.
     */
    public function __construct()
    {
        // Inicialize dependências, se necessário.
    }

    /**
     * Manipula o evento.
     */
    public function handle(FileApproved $event)
    {
        $file = $event->file;

        // Passo 1: Coletar os IDs dos setores associados ao arquivo
        $setorIds = [];
        for ($i = 1; $i <= 38; $i++) {
            $colunaSetor = 'id_setor' . $i;
            if (!empty($file->$colunaSetor)) {
                $setorIds[] = $file->$colunaSetor;
            }
        }

        // Verifica se há setores associados
        if (empty($setorIds)) {
            Log::warning("Nenhum setor associado ao arquivo: {$file->id}");
            return;
        }

        // Passo 2: Buscar os e-mails dos setores
        $emails = Sector::whereIn('id_setor', $setorIds)
                        ->pluck('email')
                        ->toArray();

        // Verifica se há e-mails para enviar
        if (empty($emails)) {
            Log::warning("Nenhum e-mail encontrado para os setores do arquivo: {$file->id}");
            return;
        }

        // Passo 3: Enviar os e-mails
        foreach ($emails as $email) {
            try {
                Mail::to($email)->send(new FileApprovedEmail($file));
                Log::info("E-mail enviado para {$email} sobre o arquivo: {$file->id}");
            } catch (\Exception $e) {
                Log::error("Erro ao enviar e-mail para {$email}: " . $e->getMessage());
            }
        }
    }
}