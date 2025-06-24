<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_publicacion';

    protected $fillable = [
        'id_proyecto',
        'titulo',
        'contenido',
        'plataforma',
        'imagen',
        'fecha_publicacion',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }
}
