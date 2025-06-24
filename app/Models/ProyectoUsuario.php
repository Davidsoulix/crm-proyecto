<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoUsuario extends Model
{
    use HasFactory;
    protected $table = 'proyecto_usuarios';

    protected $fillable = [
        'id_proyecto',
        'user_id',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
