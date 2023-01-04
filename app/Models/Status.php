<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_status',
    ];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'status_id', 'id');
    }
}
