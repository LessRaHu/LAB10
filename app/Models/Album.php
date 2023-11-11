<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'artista_id',
        'fecha_lanzamiento',
        'precio',
        'caratula',
        'descripcion',
        'genero',
    ];

    // Relaciones
    public function artista() {
        return $this->belongsTo(Artista::class, 'artista_id');
    }

    public function canciones() {
        return $this->hasMany(Cancion::class, 'album_id');
    }

    public function valoraciones() {
        return $this->hasMany(Valoracion::class, 'album_id');
    }

}
