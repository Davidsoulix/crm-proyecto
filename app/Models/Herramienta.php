<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_herramienta';

    protected $fillable = [
        'nombre',
        'descripcion',
        'username',
        'password',
    ];


    public function usuarioHerramientas()
    {
    return $this->hasMany(\App\Models\UsuarioHerramienta::class, 'id_herramienta');
    }

}
