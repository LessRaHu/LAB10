<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'biografia',
        'genero',
    ];

    public function albumes() {
        return $this->hasMany(Album::class, 'artista_id');
    }

    public function seguidores() {
        return $this->belongsToMany(Usuario::class, 'seguidores', 'artista_id', 'usuario_id');
    }

}
