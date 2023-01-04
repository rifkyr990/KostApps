<?php

namespace App\Models;

use App\Models\Kost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori',
    ];

    public function kosts()
    {
        return $this->hasMany(Kost::class, 'category_id', 'id');
    }
}
