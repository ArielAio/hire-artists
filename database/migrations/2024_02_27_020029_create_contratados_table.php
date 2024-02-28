<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contratados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('cascade');
            $table->string('nome_artista',55);
            $table->string('categoria_artista',55);
            $table->string('nome_contratante');
            $table->decimal('cache', 10, 2);
            $table->date('data_evento');
            $table->string('endereco');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contratados');
    }
};
