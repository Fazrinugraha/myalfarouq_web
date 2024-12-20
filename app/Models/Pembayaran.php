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
        'status_pembayaran',
        'alasan_gagal'
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function dataAdministrasi()
    {
        return $this->belongsTo(DataAdministrasi::class); // Ubah ke belongsTo
    }
}
