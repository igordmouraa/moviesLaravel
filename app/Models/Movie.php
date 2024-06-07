<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'synopsis',
        'durationMinutes',
        'releaseDate',
        'posterUrl',
        'trailerUrl',
        'id_user',
        'id_genre',
    ];

    // Método para retornar a URL completa do poster
    public function getPosterUrlAttribute($value)
    {
        return url($value);
    }

    // Método para retornar a URL completa do trailer
    public function getTrailerUrlAttribute($value)
    {
        return url($value);
    }
}
