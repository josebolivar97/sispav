<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipComision extends Model
{
    protected $fillable = ['nom_tipcomision'];

    public function comisiones()
    {
        return $this->hasMany(Comision::class, 'id_tipcomisions');
    }
}
