<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadTarea extends Model
{
    use HasFactory;
    protected $table = 'actividad_tareas';

    protected $fillable = [
        'id_actividad',
        'id_tarea',
        'id_estado',
    ];

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }

    public function tarea()
    {
        return $this->belongsTo(Tarea::class, 'id_tarea');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
