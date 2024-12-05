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
        Schema::table('users', function (Blueprint $table) {
            // Empresas
            for ($i = 1; $i <= 4; $i++) {
                $table->foreignId("id_empresa{$i}")->nullable()->constrained('companies', 'id_empresa')->onDelete('cascade');
            }

            // Setores
            for ($i = 1; $i <= 32; $i++) {
                $table->foreignId("id_setor{$i}")->nullable()->constrained('sectors', 'id_setor')->onDelete('cascade');
            }

            // Arquivo
            $table->foreignId('id_file')->nullable()->constrained('files')->onDelete('cascade');

            // Permissão
            $table->foreignId('id_permission')->nullable()->constrained('permissions', 'id_permissao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove as chaves estrangeiras das empresas
            for ($i = 1; $i <= 4; $i++) {
                if (Schema::hasColumn('users', "id_empresa{$i}")) {
                    $table->dropForeign(["id_empresa{$i}"]);
                    $table->dropColumn("id_empresa{$i}");
                }
            }

            // Remove as chaves estrangeiras dos setores
            for ($i = 1; $i <= 32; $i++) {
                if (Schema::hasColumn('users', "id_setor{$i}")) {
                    $table->dropForeign(["id_setor{$i}"]);
                    $table->dropColumn("id_setor{$i}");
                }
            }

            // Remove as chaves estrangeiras de arquivo e permissão
            if (Schema::hasColumn('users', 'id_file')) {
                $table->dropForeign(['id_file']);
                $table->dropColumn('id_file');
            }

            if (Schema::hasColumn('users', 'id_permission')) {
                $table->dropForeign(['id_permission']);
                $table->dropColumn('id_permission');
            }
        });
    }
};
