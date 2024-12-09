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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('id_empresa');
            $table->string('name_empresa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {

        // Primeiro remova a chave estrangeira em `users`, se ela existir
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'id_empresa')) {
                $table->dropForeign(['id_empresa']); // Remove a chave estrangeira
            }
        });

        Schema::dropIfExists('companies');
    }
};


