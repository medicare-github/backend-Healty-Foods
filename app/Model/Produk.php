<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    public $table='produk';
    protected $fillable=['nama','harga','deskripsi','nama_toko','alamat_toko','kategori_id','photo'];

   
    public function getProfile()
    {
        # code...
        if (!$this->photo) {
            # code...
            return asset('imagesProduk/default.png');
        }
        return asset('imagesProduk/'.$this->photo);
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
}
