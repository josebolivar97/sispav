<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //protected $table = 'participantes';

    protected $fillable = ['dni', 'nombres', 'apellido_paterno', 'apellido_materno', 'f_nacimiento', 'l_nacimiento', 'profesion', 'l_residencia', 'organizacion','email', 'celular', 'id_comision'];

    public function Comision()
    {
        return $this->belongsTo(Comision::class, 'id_comision');
    }

    public function registros()
    {
        return $this->hasMany(Registro::class, 'id_participante');
    }

}
