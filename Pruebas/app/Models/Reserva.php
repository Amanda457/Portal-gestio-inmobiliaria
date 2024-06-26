<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'pis_id',
        'data_reserva',
        'estat',
        'data_fi_gestio'
    ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function pis()
    {
        return $this->belongsTo(Pis::class);
    }
}
