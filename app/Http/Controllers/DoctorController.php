<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Doctor;
use App\User;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Doctor::all();
        return view('doctor.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctor.create');
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
        $user->role='doctor';
        $user->name=$request->nama_depan;
        $user->email=$request->email;
        $user->password= bcrypt('rahasi123');
        $user->remember_token=str_random(60);
       
        $user->save();
        //doctor
        $request->request->add(['user_id'=>$user->id]);
        $data=Doctor::create($request->all());
        if ($request->hasFile('profile')) {
            # code...
            $request->file('profile')->move('images/',$request->file('profile')->getClientOriginalName());
            $data->profile=$request->file('profile')->getClientOriginalName();
            $data->save();
        }
        return redirect('/doctor')->with('sukses','Data Berhasil Di Inputkan');
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
        $data=Doctor::find($id);
        return view('doctor.profile',compact('data'));
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
        $data=Doctor::find($id);
        return view('doctor/edit',['data'=>$data]);
        
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
        $data=Doctor::find($id);
        $data->update($request->all());
        if ($request->hasFile('profile')) {
            # code...
            $request->file('profile')->move('images/',$request->file('profile')->getClientOriginalName());
            $data->profile=$request->file('profile')->getClientOriginalName();
            $data->save();
        }
        return Redirect('\doctor')->with('sukses','Data Berhasil Di Update');
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
        $data=Doctor::find($id);
        $data->delete($data);
        return Redirect('\doctor')->with('sukses','Data Berhasil Di hapus');
    }
}
