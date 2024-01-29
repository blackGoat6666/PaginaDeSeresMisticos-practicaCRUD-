<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dragon extends Model
{
    use HasFactory;

    protected $table = 'Dragon';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'tipo', 'color', 'alas', 'peso', 'foto'];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = $value ?: 'sin especificar';
        if ($value !== null) {
            $this->attributes['nombre'] = ucfirst(strtolower($value));
        }
    }
    public function setFotoAttribute($value)
    {
        $this->attributes['foto'] = $value ?: 'sin especificar';
        if ($value !== null) {
            $this->attributes['foto'] = ucfirst(strtolower($value));
        }
    }
}
