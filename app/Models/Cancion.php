<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'duracion',
        'archivo',
        'letra',
    ];

    
    public function album() {
        return $this->belongsTo(Album::class, 'album_id');
    }

    public function valoraciones() {
        return $this->hasMany(Valoracion::class, 'cancion_id');
    }

    public function listasDeReproduccion() {
        return $this->belongsToMany(ListaDeReproduccion::class, 'canciones_listas', 'cancion_id', 'lista_id');
    }

}
