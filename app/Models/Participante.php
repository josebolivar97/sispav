<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //protected $table = 'participantes';

    protected $fillable = ['dni', 'nombres', 'apellido_paterno', 'apellido_materno', 'f_nacimiento', 'l_nacimiento', 'comision', 'profesion', 'l_residencia', 'organizacion', 'celular'];

}
