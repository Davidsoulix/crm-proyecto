<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tarea';

    protected $fillable = [
        'descripcion',
    ];

    public function actividadTareas()
    {
        return $this->hasMany(ActividadTarea::class, 'id_tarea');
    }
}
