<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'puntuacion',
        'comentario',
        'fecha',
    ];

    // Relaciones
    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function cancion() {
        return $this->belongsTo(Cancion::class, 'cancion_id');
    }

    public function album() {
        return $this->belongsTo(Album::class, 'album_id');
    }

}
