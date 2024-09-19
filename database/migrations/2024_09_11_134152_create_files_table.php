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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('file_path'); 
            $table->unsignedInteger('versao');
            $table->string('codigo');
            
            $table->foreignId('id_macro')->constrained('macros','id_macro')->onDelete('cascade');
            $table->foreignId('id_setor')->constrained('sectors','id_setor')->onDelete('cascade');
            $table->foreignId('id_empresa')->constrained('companies','id_empresa')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
