<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoCalendario extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_evento';

    protected $fillable = [
        'id_proyecto',
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }
}
