<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';
    protected $fillable = ['nama', 'provinsi_id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kodeSpbu()
    {
        return $this->hasMany(KodeSpbu::class);
    }
}
