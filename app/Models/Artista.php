<?php

namespace App\Models; // Namespace declaration for the Artista model

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importing HasFactory trait
use Illuminate\Database\Eloquent\Model; // Importing Model class

class Artista extends Model // Definition of the Artista model class
{
    use HasFactory; // Using the HasFactory trait for model factories

    protected $fillable = [ // Specifying the fillable fields for mass assignment
        'nome', // Field for artist's name
        'categoria' // Field for artist's category
    ];
}