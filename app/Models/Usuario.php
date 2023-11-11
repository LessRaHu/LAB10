<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo_electronico',
        'contrasena', 
        'rol',
        'avatar',
    ];

    // Relaciones
    public function albumesComprados() {
        return $this->hasMany(Album::class, 'usuario_comprador_id');
    }

    public function cancionesFavoritas() {
        return $this->hasMany(Cancion::class, 'usuario_id');
    }

    public function historialDeReproduccion() {
        return $this->hasMany(Cancion::class, 'usuario_id');
    }

    public function listasDeReproduccion() {
        return $this->hasMany(ListaDeReproduccion::class, 'usuario_id');
    }

    public function valoraciones() {
        return $this->hasMany(Valoracion::class, 'usuario_id');
    }

}
