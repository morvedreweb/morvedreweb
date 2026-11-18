<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['slug', 'nombre', 'resumen', 'incluye', 'orden', 'destacado'];

    protected function casts(): array
    {
        return [
            'incluye'   => 'array',
            'destacado' => 'boolean',
        ];
    }

    public function scopeOrdenados($query)
    {
        return $query->orderBy('orden');
    }
}
