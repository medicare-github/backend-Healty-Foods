<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Doctor;

class ApiDoctorController extends Controller
{
    //
    public function getdoctor()
    {
        $doctor=Doctor::all();
        return response()->json($doctor);
    }
}
