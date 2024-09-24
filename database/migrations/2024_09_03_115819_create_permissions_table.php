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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();

            // chaves estrangeiras de colunas "id" de outras tabelas
            $table->foreignId('id_usuario')->constained('users')->onDelete('cascade');
            $table->foreignId('id_empresa')->contained('companies')->onDelete('cascade');
            $table->foreignId('id_setor')->constained('sectors')->onDelete('cascade');

            //created_at e updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
