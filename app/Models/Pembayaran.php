<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemesanan_id',
        'bukti_pembayaran',
        'tanggal_pembayaran',
        'jumlah_pembayaran',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}