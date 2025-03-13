<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Jadwal extends Model
{
    use HasFactory;
    public $incrementing = false; // Matikan auto-increment karena UUID
    protected $keyType = 'string'; // Pastikan ID bertipe string
    protected $fillable =
    [
        'rute_id','kendaraan_id','sopir_id','tanggal_berangkat','tanggal_tiba'
    ];

    public function rute(){
        return $this->belongsTo(Rute::class, 'rute_id','id');
    }

    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id','id');
    }

    public function sopir(){
        return $this->belongsTo(Sopir::class, 'sopir_id','id');
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Buat UUID otomatis
        });
    }
}
