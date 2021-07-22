<?php

namespace App;

use App\Http\Controllers\API\KamarController;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey='id';
    protected $fillable=['pengunjung_id','kamar_id','lama_inap','total_bayar'];


    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class, 'pengunjung_id');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }
}
