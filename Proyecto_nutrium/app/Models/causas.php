<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class causas extends Model
{
    use HasFactory;
    protected $table = 'causas';
    protected $primaryKey = 'id';
    protected $fillable = ['Causas_basicas', 'Causas_inmediatas', 'adt_id'];
    public function adt()
    {
        return $this->belongsTo(Adt::class, 'adt_id');
    }
}
