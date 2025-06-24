<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_sector';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
