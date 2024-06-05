<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_referencia',
        'direccio',
        'm2',
        'habitacions',
        'lavabos',
        'preu',
        'tipus_cuina',
        'descripcio',
        'ascensor',
        'estat'
    ];
}
