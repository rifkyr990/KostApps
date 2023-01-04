<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Category;
use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kost extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pemilik',
        'telp',
        'alamat',
        'category_id',
        'total_kamar',
        'fasilitas',
        'luas',
        'foto',
        'harga',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'kost_id');
    }
}
