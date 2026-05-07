<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamars';
    protected $primaryKey = 'id_kamar';
    protected $fillable = [
        'tipe',
        'kapasitas',
        'harga',
        'terisi'
    ];

    public function kamarPenyewas()
    {
        return $this->hasMany(KamarPenyewa::class, 'kamar_id');
    }
}
