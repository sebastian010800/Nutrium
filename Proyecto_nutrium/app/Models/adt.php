<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adt extends Model
{
    use HasFactory;
    protected $table = 'adt';
    protected $primaryKey = 'id';

    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'localidad_accidente', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}