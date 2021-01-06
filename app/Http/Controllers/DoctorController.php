<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Appoinment;
use App\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('doctor.table-datatable-basic');
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
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //$userCount = $doctor->appointment->user->count();

        $userCount = Appoinment::where('doctor_id', $doctor->id)
            ->distinct()->get('user_id');
        $userCount = count($userCount);
        return view('doctor.docdash', compact('doctor', 'userCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
    }

    public function updateAppointmentStatus(Appoinment $appoinment, Finance $finance)
    {
        $appoinment->status = "Completed";
        $appoinment->save();
        $finance->details = $appoinment->doctor->charge;
        $finance->user_id = $appoinment->user->id;
        $finance->save();
        return redirect()->back();
    }

    public function setTime(Request $request, Doctor $doctor)
    {
        $str = array();
        $days = "";
        $input = $request->all();
        $input['days'] = $request->input('days');
        foreach ($input["days"] as $s) {
            $days .= $s . ",";
        }
        $to = $request->to;
        $from =  $request->from;
        $date = $from . "-" . $to;
        $doctor->availability = $days;
        $doctor->time = $date;
        $doctor->save();
        return redirect()->back();
    }
}
