<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nombre',
        'empresa',
        'email',
        'telefono',
        'id_sector',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'id_sector');
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'id_cliente');
    }

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'id_cliente');
    }
}
