<?php

namespace App\Http\Controllers;

use App\Appoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{

    public function index()
    {
        $appoinments= Appoinment::where('status','Pending')->get();
        return view('appoinment-list', compact('appoinments'));
    }

    public function appointments()
    {
        $appoinments = Appoinment::where('status',"!=",'Pending')->get();
        return view('appoinment-list', compact('appoinments'));
    }
   
    public function updateAppointmentStatus(Appoinment $appoinment)
    {
        if($appoinment->status==="Pending"){
            $appoinment->status="Approved";
            $appoinment->save();
        return redirect()->back();
        }
        else 
        $appoinment->status= 'Pending';
        $appoinment->save();
        return redirect()->back();
    }


    public function approveAppointmentStatus(Appoinment $appoinment){
        $appoinment->status="Approved";
            $appoinment->save();
            return redirect()->back();
    }


    public function cancelAppointmentStatus(Appoinment $appoinment){
        $appoinment->status="Canceled";
            $appoinment->save();
            return redirect()->back();
    }

}
