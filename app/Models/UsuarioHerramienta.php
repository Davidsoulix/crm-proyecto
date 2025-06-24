<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioHerramienta extends Model
{
    use HasFactory;
     protected $table = 'usuario_herramientas';

    protected $fillable = [
        'user_id',
        'id_herramienta',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function herramienta()
    {
        return $this->belongsTo(Herramienta::class, 'id_herramienta');
    }
}
