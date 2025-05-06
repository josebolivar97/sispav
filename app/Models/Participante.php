<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //protected $table = 'participantes';

    protected $fillable = ['dni', 'nombres', 'apellido_paterno', 'apellido_materno', 'f_nacimiento', 'departamento', 'provincia', 'distrito', 'profesion', 'l_residencia', 'organizacion', 'email', 'celular', 'id_comision', 'id_user', 'estado'];

    public function Comision()
    {
        return $this->belongsTo(Comision::class, 'id_comision');
    }

    public function registros()
    {
        return $this->hasMany(Registro::class, 'id_participante');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
