<?php

use Illuminate\Database\Migrations\Migration; // Importing Migration class
use Illuminate\Database\Schema\Blueprint; // Importing Blueprint class
use Illuminate\Support\Facades\Schema; // Importing Schema facade

return new class extends Migration // Creating an anonymous class that extends Migration
{
    public function up(): void // Method to run the migrations
    {
        Schema::create('contratados', function (Blueprint $table) { // Creating a 'contratados' table
            $table->id(); // Adding an auto-incrementing primary key column
            $table->unsignedBigInteger('artista_id'); // Adding a column for the artist's ID
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('cascade'); // Adding a foreign key constraint
            $table->string('nome_artista',55); // Adding a column for the artist's name
            $table->string('categoria_artista',55); // Adding a column for the artist's category
            $table->string('nome_contratante'); // Adding a column for the contractor's name
            $table->decimal('cache', 10, 2); // Adding a column for the fee
            $table->date('data_evento'); // Adding a column for the event date
            $table->string('endereco'); // Adding a column for the address
            $table->timestamps(); // Adding 'created_at' and 'updated_at' columns for timestamps
        });
    }

    public function down(): void // Method to reverse the migrations
    {
        Schema::dropIfExists('contratados'); // Dropping the 'contratados' table if it exists
    }
};