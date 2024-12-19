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
        Schema::table('files', function (Blueprint $table) {
            // Adicionando as 4 colunas para empresas
            for ($i = 1; $i <= 4; $i++) {
                $table->foreignId("id_empresa$i")
                    ->nullable()
                    ->constrained('companies', 'id_empresa')
                    ->onDelete('cascade');
            }

            // Adicionando as 32 colunas para setores
            for ($i = 1; $i <= 38; $i++) {
                $table->foreignId("id_setor$i")
                    ->nullable()
                    ->constrained('sectors', 'id_setor')
                    ->onDelete('cascade');
            }

            // Colunas adicionais
            $table->boolean('ativo')->default(0);
            $table->unsignedInteger('aprovacao')->default(1);
            $table->string('motivoReprovacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('files', function (Blueprint $table) {
            // Removendo as colunas de empresas
            for ($i = 1; $i <= 4; $i++) {
                $column = "id_empresa$i";
                if (Schema::hasColumn('files', $column)) {
                    $table->dropForeign([$column]);
                    $table->dropColumn($column);
                }
            }

            // Removendo as colunas de setores
            for ($i = 1; $i <= 38; $i++) {
                $column = "id_setor$i";
                if (Schema::hasColumn('files', $column)) {
                    $table->dropForeign([$column]);
                    $table->dropColumn($column);
                }
            }

            // Removendo colunas adicionais
            if (Schema::hasColumn('files', 'ativo')) {
                $table->dropColumn('ativo');
            }

            if (Schema::hasColumn('files', 'aprovacao')) {
                $table->dropColumn('aprovacao');
            }

            if (Schema::hasColumn('files', 'motivoReprovacao')) {
                $table->dropColumn('motivoReprovacao');
            }
        });
    }
};
