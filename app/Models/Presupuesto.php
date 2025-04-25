<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $fillable = [
        'user_id',
        'categoria_id',
        'monto_asignado',
        'monto_gastado',
        'mes',
        'anio'
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
