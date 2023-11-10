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
        Schema::create('disponibilidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->time('horarioDisponivel');
            $table->date('diaDisponivel');
            $table->unsignedBigInteger('catador_id');
            $table->foreign('catador_id')->references('id')->on('catadors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilidades');
    }
};
