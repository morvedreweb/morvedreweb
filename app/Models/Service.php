<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['slug', 'nombre', 'resumen', 'contenido', 'incluye', 'orden', 'destacado'];

    protected function casts(): array
    {
        return [
            'incluye'   => 'array',
            'contenido' => 'array',
            'destacado' => 'boolean',
        ];
    }

    public function scopeOrdenados($query)
    {
        return $query->orderBy('orden');
    }
}
