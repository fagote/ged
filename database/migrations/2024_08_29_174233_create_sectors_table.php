<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id('id_setor');
            $table->string('name_setor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Primeiro remova a chave estrangeira em `users`, se existir
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'id_setor')) {
                $table->dropForeign(['id_setor']); // Remove a FK
            }
        });

        // Agora exclua a tabela `sectors`
        Schema::dropIfExists('sectors');
    }
};
