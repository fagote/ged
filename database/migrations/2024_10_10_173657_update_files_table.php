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
        // Schema::table, pois estou alterando uma tabela existente.
        Schema::table('files', function(Blueprint $table){
            $table->boolean('ativo')->default(0);
            $table->unsignedInteger('aprovacao')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('files', function (Blueprint $table){
            $table->dropColumn('ativo');
            $table->dropColumn('aprovacao');
        });
    }
};
