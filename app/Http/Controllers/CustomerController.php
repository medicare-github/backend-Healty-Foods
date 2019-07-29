<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Customer;
use App\Model\Produk;
use App\Model\DetailPenjualan;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Customer::all();
        return view('customer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        //
        $user=new \App\User;
        $user->role='guest';
        $user->name=$request->nama;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->remember_token=str_random(60);
        $user->save();
        $request->request->add(['user_id'=>$user->id]);
        $data=Customer::create($request->all());
        if ($request->hasFile('profile')) {
            # code...
            $request->file('profile')->move('images/',$request->file('profile')->getClientOriginalName());
            $data->profile=$request->file('profile')->getClientOriginalName();
            $data->save();
        }
        return redirect('/customer')->with('sukses','Data Berhasil Di Inputkan');
        

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
        $customer= Customer::find($id);
        $produk= Produk::all();
       
        $detailpenjualan= DetailPenjualan::all();    
       return view('customer.detail',['customer'=>$customer,'produk'=>$produk,'detailpenjualan'=>$detailpenjualan]);
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
        $data=Customer::find($id);
        $data->update($request->all());
        if ($request->hasFile('profile')) {
            # code...
            $request->file('profile')->move('images/',$request->file('profile')->getClientOriginalName());
            $data->profile=$request->file('profile')->getClientOriginalName();
            $data->save();
        }
        return Redirect('\customer')->with('sukses','Data Berhasil Di Update');
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
    }
}
