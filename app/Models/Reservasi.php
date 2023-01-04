<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kost_id',
        'nama_pemesan',
        'alamat_pemesan',
        'telp',
        'tanggal',
        'total_cost',
        'pembayaran_id',
        'status_id',
        'user_id',
    ];

    public function kost()
    {
        return $this->belongsTo(Kost::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
    
    public $timestamps = false;
}
