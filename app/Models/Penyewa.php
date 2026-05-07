<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewas';
    protected $primaryKey = 'id_penyewa';
    protected $fillable = [
        'nama', 
        'no_hp', 
        'ktp', 
    ];

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'penyewa_id');
    }

    public function kamarPenyewas()
    {
        return $this->hasMany(KamarPenyewa::class, 'penyewa_id');
    }

}
