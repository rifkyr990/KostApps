<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pembayaran',
    ];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'pembayaran_id', 'id');
    }
}
