<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $fillable = [
        'user_id',
        'categoria_id',
        'tipo',
        'monto',
        'descripcion',
        'foto',
        'fecha'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function categoria()
    {
        $this->belongsTo(Categoria::class);
    }
}
