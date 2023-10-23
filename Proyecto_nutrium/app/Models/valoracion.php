<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valoracion extends Model
{
    use HasFactory;
    protected $table = 'valoracion';
    protected $primaryKey = 'id';

    public function investigador()
    {
        return $this->belongsTo(investigador::class, 'investigador_id', 'id');
    }
    public function adt()
    {
        return $this->belongsTo(adt::class, 'adt_id', 'id');
    }
}
