<?php

use Illuminate\Database\Migrations\Migration; // Importing Migration class
use Illuminate\Database\Schema\Blueprint; // Importing Blueprint class
use Illuminate\Support\Facades\Schema; // Importing Schema facade

return new class extends Migration // Creating an anonymous class that extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Method to run the migrations
    {
        Schema::create('artistas', function (Blueprint $table) { // Creating a 'artistas' table
            $table->id(); // Adding an auto-incrementing primary key column
            $table->string('nome',55); // Adding a column for the artist's name
            $table->string('categoria',55); // Adding a column for the artist's category
            $table->timestamps(); // Adding 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Method to reverse the migrations
    {
        Schema::dropIfExists('artistas'); // Dropping the 'artistas' table if it exists
    }
};