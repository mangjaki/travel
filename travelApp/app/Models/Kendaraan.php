<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Kendaraan extends Model
{
    use HasFactory;
    public $incrementing = false; // Matikan auto-increment karena UUID
    protected $keyType = 'string'; // Pastikan ID bertipe string
    protected $fillable =
    [
        'plat','merk_mobil','warna','kapasitas','bahan_bakar','status'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Buat UUID otomatis
        });
    }
}
