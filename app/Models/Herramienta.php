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

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_herramientas', 'id_herramienta', 'user_id');
    }
}
