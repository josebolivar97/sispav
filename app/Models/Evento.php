<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['nom_evento', 'lugar', 'fech_aperturra', 'fech_cierre', 'anio'];

    public function registros()
    {
        return $this->hasMany(Registro::class, 'id_evento');
    }
}
