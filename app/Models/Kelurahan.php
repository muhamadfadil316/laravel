<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahans';
    protected $fillable = [
        'id',
        'nama',
    ];

    public function pasiens()
    {
        return $this->hasMany(Pasien::class, 'kelurahan_id');
    }
}
