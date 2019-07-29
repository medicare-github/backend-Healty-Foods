<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produk;
use App\Model\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_produks= Produk::all();
        $data_kategori= Kategori::all();
        return view('produks.index',['data_produks'=>$data_produks,'data_kategori'=>$data_kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Kategori::all();
        return view('produks/create',compact('data'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=Produk::create($request->all());
        if ($request->hasFile('photo')) {
            # code...
            $request->file('photo')->move('imagesProduk/',$request->file('photo')->getClientOriginalName());
            $data->photo=$request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect('/produk')->with('sukses','Data Berhasil Di Inputkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data=Produk::find($id);
        return view('produks.detail',compact('data_kategori','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $data=Produk::find($id);
        $data_kategori=Kategori::all();
        return view('produks/edit',['data'=>$data,'data_kategori'=>$data_kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Produk::find($id);
        $data->update($request->all());
        if ($request->hasFile('photo')) {
            # code...
            $request->file('photo')->move('imagesProduk/',$request->file('photo')->getClientOriginalName());
            $data->photo=$request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return Redirect('\produk')->with('sukses','Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Produk::find($id);
        $data->delete($data);
        return Redirect('\produk')->with('sukses','Data Berhasil Di hapus');
    }
}
