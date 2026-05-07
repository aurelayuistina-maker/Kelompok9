<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KamarPenyewa extends Model
{
    use HasFactory;

    protected $table = 'kamar_penyewas';
    protected $primaryKey = 'id_kamar_penyewas';
    protected $fillable = [
        'kamar_id', 
        'penyewa_id'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewa_id');
    }
}