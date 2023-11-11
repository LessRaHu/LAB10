<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaDeReproduccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'titulo',
        'descripcion',
    ];

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function canciones() {
        return $this->belongsToMany(Cancion::class, 'canciones_listas', 'lista_id', 'cancion_id');
    }

}
