<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    public $table='kategori';
    protected $fillable=['nama','deskripsi'];
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
