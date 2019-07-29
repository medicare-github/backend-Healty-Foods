<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kategori;

class ApiKategoriController extends Controller
{
    //
    public function getkategori()
    {
        # code...
        $data=Kategori::all();
        return response()->json($data);
        
    }
}
