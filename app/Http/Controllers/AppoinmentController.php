<?php

namespace App\Http\Controllers;

use App\Appoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function show(Appoinment $appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoinment $appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoinment $appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoinment $appoinment)
    {
        //
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
