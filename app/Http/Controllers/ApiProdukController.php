<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produk;

class ApiProdukController extends Controller
{
    //
    public function getproduk()
    {
        # code...
        $data=Produk::with('kategori')->get();
        return response()->json($data);
        
    }
    public function postproduk(Request $request)
    {
        # code...
        $data = Produk::create($request->all());
        return response()->json($data);
    }
    public function updateproduk($id, Request $request)
    {
        $data = Produk::where('id', $id)->update($request->all());
        return response()->json($data);
    }
    public function deleteproduk($id)
    {
        $data=Produk::find($id);
        $data->delete($data);
        return response()->json($data);
    }
}
