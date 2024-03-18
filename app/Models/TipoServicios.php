<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoServicios extends Model
{
    use HasFactory;
    protected $table = "tipo_servicios";
    protected $fillable = ['tipo_servicio', 'estado'];
    protected $hidden = ['id'];

    public function Servicios(): HasMany
    {
        return $this->belongsToy(Servicios::class);
    }   
}
