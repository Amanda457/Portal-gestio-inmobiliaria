<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = ['nom', 'cognom', 'telefon', 'data_naixement', 'email'];

    public function reservas()
    {
      return $this->hasMany(Reserva::class);
    }

}
