<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_type',
    ];
    public function kosts()
    {
        return $this->hasMany(Kost::class, 'type_id');
    }
}
