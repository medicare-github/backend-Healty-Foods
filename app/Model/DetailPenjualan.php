<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    //
    public $table='customer_produk';
    protected $fillable=['produk_id','customer_id','jumlah'];
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

}
