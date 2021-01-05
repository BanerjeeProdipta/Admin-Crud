<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\Appoinment;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
   
    public function store(Request $request, Appoinment $appoinment, Prescription $prescription)
    {
        $prescription->details = $request->pres;
        $prescription->disease = $request->dis;
        $prescription->prescribed_by = $appoinment->doctor_id;
        $prescription->patient = $appoinment->user_id;
        $prescription->save();
        $appoinment->prescription_id = $prescription->id;
        $appoinment->save();
        return redirect()->back();
    }

}
