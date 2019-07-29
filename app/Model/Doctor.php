<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $table='doctor';
    protected $fillable=['nama_depan','user_id','email','nama_belakang','gender','alamat','tempat_lahir','tgl_lahir','profile'];
    public $timestamps=false;

    public function getAvatar()
    {
        # code...
        if (!$this->profile) {
            # code...
            return asset('images/default.png');
        }
        return asset('images/'.$this->profile);
    }
}
