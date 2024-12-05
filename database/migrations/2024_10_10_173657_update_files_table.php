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
        // Alterando a tabela existente
        Schema::table('files', function (Blueprint $table) {
            // Adicionando as 4 colunas para empresas
            $table->foreignId('id_empresa1')->nullable()->constrained('companies', 'id_empresa')->onDelete('cascade');
            $table->foreignId('id_empresa2')->nullable()->constrained('companies', 'id_empresa')->onDelete('cascade');
            $table->foreignId('id_empresa3')->nullable()->constrained('companies', 'id_empresa')->onDelete('cascade');
            $table->foreignId('id_empresa4')->nullable()->constrained('companies', 'id_empresa')->onDelete('cascade');

            // Adicionando as 32 colunas para setores
            for ($i = 1; $i <= 32; $i++) {
                $table->foreignId("id_setor$i")->nullable()->constrained('sectors', 'id_setor')->onDelete('cascade');
            }

            // Colunas existentes
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

            for($i = 1; $i <= 4; $i++ ){
                if (Schema::hasColumn('files', 'id_empresa{$i}')) {
                    $table->dropForeign(['id_empresa{$i}']);
                    $table->dropColumn('id_empresa{$i}');
                }
            }


            for($i = 1; $i <= 32; $i++ ){
                if (Schema::hasColumn('files', 'id_setor{$i}')) {
                    $table->dropForeign(['id_setor{$i}']);
                    $table->dropColumn('id_setor{$i}');
                }
            }

            if(Schema::hasColumn('files', 'ativo')){
                $table->dropForeign(['ativo']);
                $table->dropColumn('ativo');
            }

            if(Schema::hasColumn('files', 'aprovacao')){
                $table->dropForeign(['aprovacao']);
                $table->dropColumn('aprovacao');
            }

            if(Schema::hasColumn('files', 'motivoReprovacao')){
                $table->dropForeign(['motivoReprovacao']);
                $table->dropColumn('motivoReprovacao');
            }
        });

    }

};
