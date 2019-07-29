<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
class DashboardController extends Controller
{
    //
    public function index()
    {
        //
        return view('dashboard.index');
    }
    public function messages()
    {   
        $data=Customer::all();
        return view('dashboard.messages',compact('data'));
    }

}
