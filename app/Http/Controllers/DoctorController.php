<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.doctor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','min:2','max:50'],
            'email' => ['required','min:2','max:50',Rule::unique('users','email')],
            'password' => ['required','min:6','max:25'],
            'gender' => ['required'],
            'education' => ['nullable','min:2','max:50'],
            'phone' => ['nullable','min:2','max:50'],
            'address' => ['nullable','min:2','max:50'],
            'description' => ['nullable','min:2','max:50'],
            'role_id' =>  ['required'],
            'department' => ['required','min:2','max:50'],
            'profile_photo_path' => ['nullable','mimes:jpeg,jpg,png'],
        ]);

        $doctor = new User();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = bcrypt($request->password);
        $doctor->gender = $request->gender;
        $doctor->education = $request->education;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->description = $request->description;
        $doctor->role_id = $request->role_id;
        $doctor->department = $request->department;
        if($request->hasFile('profile_photo_path')){
            $image = $request->profile_photo_path;
            $name = Str::random(40).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images/doctors',$name);
            // $products->image = $name;
            $doctor->profile_photo_path = $name;
        }
        $doctor->save();
        return redirect()->back()->with('message',  $doctor->name . 'doctor added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
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
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
