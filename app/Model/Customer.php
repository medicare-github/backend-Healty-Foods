<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public $table='customer';
    protected $fillable=['nama','gender','alamat','email','profile','user_id'];
    public $timestamps=false;
    public function produk()
    {
        return $this->belongsToMany(Produk::class)->withPivot(['jumlah','created_at']);
    }
    public function getPhoto()
    {
        # code...
        if (!$this->profile) {
            # code...
            return asset('images/default.png');
        }
        return asset('images/'.$this->profile);
    }
}
