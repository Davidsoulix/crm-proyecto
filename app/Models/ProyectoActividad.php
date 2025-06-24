<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoActividad extends Model
{
    use HasFactory;
    protected $table = 'proyecto_actividads';

    protected $fillable = [
        'id_proyecto',
        'id_actividad',
        'id_estado',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
