<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $primaryKey= 'id';
    protected $fillable = ['nama_lengkap','alamat','jenis_kelamin','no_hp','no_ktp'];

    // public function kamar()
    // {
    //     return $this->hasMany(kamar::class, 'kamar_id');
    // }

    // public function transaksi()
    // {
    //     return $this->hasOne(Transaksi::class);
    // }
}