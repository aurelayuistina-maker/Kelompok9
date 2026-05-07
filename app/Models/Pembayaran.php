<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'penyewas';
    protected $primaryKey = 'id_penyewa';
    protected $fillable = [
        'tanggal_bayar', 
        'jumlah_bayar', 
        'bukti_bayar', 
        'bulan'
    ];

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'penyewa_id');
    }
}
