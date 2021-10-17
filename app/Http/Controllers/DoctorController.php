<?php

namespace App\Http\Controllers;

use App\Http\Requests\doctor\DoctorRequest;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DoctorController extends Controller {
    public function index() {
        $this->authorize('admin');
        $doctors = User::latest()->where('role_id', '=', '2')->get();
        return view('dashboard.doctor.index', compact('doctors'));
    }

    public function create() {
        $genders = getGenders();
        $departments = getSpecialistDepartment();
        return view('dashboard.doctor.create', compact('genders', 'departments'));
    }

    public function store(DoctorRequest $request) {
        // $this->createValidation($request);
        $doctor = new User();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = bcrypt($request->password);
        $doctor->gender = $request->gender;
        $doctor->education = $request->education;
        $doctor->phone = $request->phone ?: '';
        $doctor->address = $request->address ?: '';
        $doctor->description = $request->description ?: '';
        $doctor->role_id = $request->role_id;
        $doctor->department = $request->department;
        if ($request->hasFile('profile_photo_path')) {
            $image = $request->profile_photo_path;
            $name = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/doctors', $name);
            // $products->image = $name;
            $doctor->profile_photo_path = $name;
        }
        // dd($doctor);
        $doctor->save();
        return redirect('doctor');

    }

    public function show($id) {
        dd('show here', $id);
    }

    public function edit(User $doctor) {
        $genders = getGenders();
        $departments = getSpecialistDepartment();
        // $doctor = User::findOrFail($id);
        // return dd($doctors);
        return view('dashboard.doctor.edit', compact('doctor','genders','departments'));
    }

    public function update(Request $request, $id) {
        //
        $this->updateValidation($request);


        $doctor = User::findOrFail($id);

        // $role = Role::pluck();

        $doctor->name = $request->name;
        $doctor->email = $request->email;

        $doctor->gender = $request->gender;
        $doctor->education = $request->education;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->description = $request->description;
        // $doctor->role_id = $request->role_id;
        $doctor->department = $request->department;
        if($request->password){
            $doctor->password = bcrypt($request->password);
        }
        if ($request->hasFile('profile_photo_path')) {
            $image = $request->profile_photo_path;
            $name = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/doctors', $name);
            // $products->image = $name;
            $doctor->profile_photo_path = $name;
        }
        $doctor->save();
        return redirect('doctor');

        // User::create([
        //     $doctor->name = $request->name,
        //     $doctor->email = $request->email,
        //     $doctor->password = bcrypt($request->password),
        //     $doctor->gender = $request->gender,
        //     $doctor->education = $request->education,
        //     $doctor->phone = $request->phone,
        //     $doctor->address = $request->address,
        //     $doctor->description = $request->description,
        //     $doctor->role_id = $request->role_id,
        //     $doctor->department = $request->department,
        //     if ($request->hasFile('profile_photo_path')) {
        //         $image = $request->profile_photo_path;
        //         $name = Str::random(40) . '.' . $image->getClientOriginalExtension();
        //         $image->storeAs('public/images/doctors', $name);
        //         // $products->image = $name;
        //         $doctor->profile_photo_path = $name;
        //     }
        // ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */

    public function destroy($id) {

        $doctor = User::findOrFail($id);
        $doctor->delete();
        return redirect()->route('doctor.index')
            ->with('success', 'doctor deleted successfully');
        return response()->json([
            'message' => 'Data deleted successfully!',
        ]);
    }

/* Validation */
    public function createValidaion($request) {

        return $request->validate([
            'name'        => ['required', 'max:50'],
            'email'       => ['required', 'email', 'max:50'],
            'passsword'   => ['required', 'min:6'],
            'gender'      => ['required', Rule::in(getGenders())],
            // 'role_id'     =>['required']
            'education'   => ['required', 'string'],
            'phone'       => ['required', 'numeric', 'digits:11'],
            'address'     => ['required', 'string'],
            'description' => ['required', 'string'],
            'department'  => ['required', Rule::in(getSpecialistDepartment())],
            'image'       => ['nullable', 'mimes:jpg,bmp,png'],
        ]);
    }

    public function updateValidation($request) {
        return $request->validate([
            'name'        => ['required', 'max:50'],
            'email'       => ['required', 'email', Rule::unique('users', 'email')],
            'passsword'   => ['nullable', 'min:6'],
            'gender'      => ['required', Rule::in(getGenders())],
            'education'   => ['nullable', 'string'],
            'phone'       => ['nullable', 'numeric', 'digits:11'],
            'address'     => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'department'  => ['nullable', Rule::in(getSpecialistDepartment())],
            'image'       => ['nullable', 'mimes:jpg,bmp,png'],
        ]);}

}
