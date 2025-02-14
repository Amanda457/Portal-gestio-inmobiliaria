<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pis extends Model
{
    use HasFactory;

    protected $table = 'pisos';
    protected $fillable = [
        'nom_referencia',
        'tipus',
        'direccio',
        'poblacio',
        'm2',
        'habitacions',
        'lavabos',
        'preu',
        'tipus_cuina',
        'descripcio',
        'ascensor',
        'estat'
    ];

    public function reservas()
  {
    return $this->hasMany(Reserva::class);
  }
}
