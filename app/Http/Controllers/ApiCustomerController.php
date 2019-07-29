<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Customer;

class ApiCustomerController extends Controller
{
    //
    public function registercustomer(Request $request)
    {
        # code...
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
       
        return response()->json('sukses');
    }
    
}
