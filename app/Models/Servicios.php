<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Servicios extends Model
{
    use HasFactory;
    public function DetalleServicio(): BelongsTo
    {
        return $this->belongsTo(DetalleServicios::class);
    }

    public function TipoServicio(): HasMany
    {
        return $this->hasMany(TipoServicios::class);
    }
}
