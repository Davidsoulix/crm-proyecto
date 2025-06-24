<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    protected $primaryKey = 'id_proyecto';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'id_cliente',
        'id_estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class, 'id_proyecto');
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'proyecto_usuarios', 'id_proyecto', 'user_id');
    }

    public function eventos()
    {
        return $this->hasMany(EventoCalendario::class, 'id_proyecto');
    }
    public function proyectoActividades()
    {
        return $this->hasMany(ProyectoActividad::class, 'id_proyecto');
    }
}
