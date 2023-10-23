<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traslado extends Model
{
    use HasFactory;
    
    protected $table = 'traslado';
    protected $primaryKey = 'id';

    public function adt()
    {
        return $this->belongsTo(adt::class, 'adt_id', 'id');
    }
    public function ips()
    {
        return $this->belongsTo(ips::class, 'ips_id', 'id');
    }
}
