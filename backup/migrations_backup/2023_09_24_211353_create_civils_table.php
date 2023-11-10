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
        Schema::create('civils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nomeCivil');
            $table->string('cpfCivil')->unique();
            $table->string('cidade');
            $table->string('uf');
            $table->string('rua');
            $table->int('numero');
            $table->string('bairro');
            $table->string('emailCivil')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passwordCivil');
            $table->string('telefoneCivil');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civils');
    }
};
