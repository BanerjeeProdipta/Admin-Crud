<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Doctor;


class UserController extends Controller
{

    public function admindash(){
        $user= User::all();
        return view('admindash');
    }

    public function index()
    {
        $users= User::all();
        return view('user-list', compact('users'));
       
    }


    public function create()
    {
        //
    }


    public function store(Request $request, User $user, Doctor $doctor)
    {
        if($request->type == "Doctor"){
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
        else{
            $this->validateUser();
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
            return redirect('/')->with('success', 'User has been saved');
        }
    }
    public function validateDoctor()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'email|unique:users|required',
            'blood_group' => 'required',
            'phone_number' => 'unique:users|required',
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
    public function validateUser()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'email|unique:users|required',
            'blood_group' => 'required',
            'phone_number' => 'unique:users|required',
            'type' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    }

    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        return view('edit-doctor',compact('user'));
    }


    public function update(Request $request, User $user, Doctor $doctor)
    {
        if($request->type === "Doctor"){
            $user->update( $this->updateValidationUser());
            $doctor->update( $this->updateValidationDoctor());
            return redirect()->route('user-list');
        }
        else{
            $user->update( $this->updateValidationUser());
            return redirect()->route('user-list');
        }
  
    }
    public function updateValidationUser()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'blood_group' => 'required',
            'phone_number' => 'required',
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
