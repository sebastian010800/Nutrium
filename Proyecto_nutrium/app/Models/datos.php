<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos extends Model
{
    use HasFactory;
    protected $table = 'datos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha_nacimiento',
        'genero',
        'celular',
        'direccion',
        'contacto_emergencia_nombre',
        'contacto_emergencia_telefono',
        'peso',
        'altura',
        'grupo_sanguineo',
        // Agrega 'fecha_nacimiento' a la lista de campos permitidos
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
