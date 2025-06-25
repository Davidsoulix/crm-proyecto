<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_actividad';

    protected $fillable = [
        'titulo',
        'descripcion',
    ];

    public function actividadTareas()
    {
        return $this->hasMany(ActividadTarea::class, 'id_actividad');
    }

    public function proyectoActividades()
    {
        return $this->hasMany(ProyectoActividad::class, 'id_actividad');
    }
}
