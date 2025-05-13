<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KodeSpbu extends Model
{
    use HasFactory;

    protected $table = 'kode_spbu';
    protected $fillable = ['kota_id', 'kode'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
