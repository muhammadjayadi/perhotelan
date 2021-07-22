<?php

namespace App;

use App\Http\Controllers\API\KamarController;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_kamar', 'harga','fasilitas'];

    public function pengunjung()
    {
        return $this->hasOne(Pengunjung::class, 'pengunjung_id');
    }


}