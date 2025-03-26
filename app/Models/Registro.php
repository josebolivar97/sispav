<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = ['institucion', 'nom_reconocimiento', 'pdf_reconocimiento', 'id_participante', 'id_evento'];

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'id_participante');
    }

    // Relación con Evento
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }
}
