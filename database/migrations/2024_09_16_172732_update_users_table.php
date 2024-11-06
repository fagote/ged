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

            $table->foreignId('id_empresa')->nullable()->constrained('companies','id_empresa')->onDelete('cascade');
            $table->foreignId('id_setor')->nullable()->constrained('sectors', 'id_setor')->onDelete('cascade');
            $table->foreignId('id_file')->nullable()->constrained('files')->onDelete('cascade');
            $table->foreignId('id_permission')->nullable()->constrained('permissions','id_permissao')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove as chaves estrangeiras e as colunas
            $table->dropForeign(['id_empresa']);
            $table->dropForeign(['id_setor']);
            $table->dropForeign(['id_file']);
            $table->dropForeign(['id_permission']);

            $table->dropColumn(['id_empresa', 'id_setor', 'id_file', 'id_permission']);
        });
    }
};
