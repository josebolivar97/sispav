<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $fillable = ['nombre', 'id_tipcomisions'];

    public function tipoComision()
    {
        return $this->belongsTo(TipComision::class, 'id_tipcomisions');
    }
}
