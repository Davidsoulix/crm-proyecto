<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicituds';
    protected $primaryKey = 'id_solicitud';

    protected $fillable = [
        'descripcion',
        'id_cliente',
        'id_tipocliente',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function tipoCliente()
    {
        return $this->belongsTo(TipoCliente::class, 'id_tipocliente');
    }
}
