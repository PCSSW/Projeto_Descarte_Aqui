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
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nomeMaterial');
            $table->unsignedBigInteger('civil_id');
            $table->foreign('civil_id')->references('id')->on('civils');
            $table->unsignedBigInteger('catador_id');
            $table->foreign('catador_id')->references('id')->on('catadors');
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
