<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\User;
use App\Doctor;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, User $user, Doctor $doctor)
    {
        $this->validateDoctor();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->blood_group = $request->blood_group;
        $user->phone_number = $request->phone_number;
        $user->type = $request->type;
        $user->status = $request->status;
        $user->gender = $request->gender;
        $user->password = $request->password;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/profile-picture/', $filename);
            $user->profile_pic = $filename;
        }
        $user->save();

        $doctor->user_id = $user->id;
        $doctor->specilization = $request->specilization;
        $doctor->qualification = $request->qualification;
        $doctor->availability = $request->availability;
        $doctor->time = $request->time;
        $doctor->charge = $request->charge;
        $doctor->save();

        return redirect('/')->with('success', 'Doctor has been saved');
    }
    public function validateDoctor()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'email|unique|required',
            'blood_group' => 'required',
            'phone_number' => 'unique|required',
            'type' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


            'specilization' => 'required',
            'qualification' => 'required',
            'availability' => 'required',
            'time' => 'required',
            'charge' => 'required',

        ]);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit-doctor',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Doctor $doctor)
    {
        $user->update( $this->updateValidationUser());
        $doctor->update( $this->updateValidationDoctor());
        return redirect()->route('doctor-list');
    }
    public function updateValidationUser()
    {
        return request()->validate([
            'name' => 'required',
            'blood_group' => 'required',
            'type' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
    }
    public function updateValidationDoctor()
    {
    return request()->validate([
            'specilization' => 'required',
            'qualification' => 'required',
            'availability' => 'required',
            'time' => 'required',
            'charge' => 'required',
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $image_path ='uploads/profile-picture/'.$user->profile_pic;
        File::delete($image_path);
        $user->delete();
        return redirect('/doctors');
    }

    public function updateStatus(User $user)
    {
        if($user->status==="Enabled"){
            $user->status="Disabled";
            $user->save();
        return redirect()->back();
        }
        else 
        $user->status= 'Enabled';
        $user->save();
        return redirect()->back();
    }
}
