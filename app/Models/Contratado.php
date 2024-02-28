<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratado extends Model
{
    use HasFactory;

    protected $fillable = [
        'artista_id',
        'nome_artista',
        'categoria_artista',
        'nome_contratante',
        'cache',
        'data_evento',
        'endereco',
    ];

    public function artista()
    {
        return $this->belongsTo(Artista::class);
    }
}