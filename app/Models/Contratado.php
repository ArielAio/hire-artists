<?php

namespace App\Models; // Namespace declaration for the Contratado model

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importing HasFactory trait
use Illuminate\Database\Eloquent\Model; // Importing Model class

class Contratado extends Model // Definition of the Contratado model class
{
    use HasFactory; // Using the HasFactory trait for model factories

    protected $fillable = [ // Specifying the fillable fields for mass assignment
        'artista_id', // ID of the contracted artist
        'nome_artista', // Name of the contracted artist
        'categoria_artista', // Category of the contracted artist
        'nome_contratante', // Name of the contractor
        'cache', // Fee for the contracted artist
        'data_evento', // Date of the event
        'endereco', // Address of the event
    ];

    public function artista() // Defining a relationship with the Artista model
    {
        return $this->belongsTo(Artista::class); // Contratado belongs to an Artista
    }
}