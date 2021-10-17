<?php

namespace App\Http\Requests\doctor;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','min:2','max:50'],
            'email' => ['required','min:2','max:50',Rule::unique('users','email')],
            'password' => ['required','min:6','max:25'],
            'gender' => ['required'],
            'education' => ['nullable','min:2','max:50'],
            'phone' => ['nullable','min:2','max:50'],
            'address' => ['nullable','min:2','max:50'],
            'description' => ['nullable','min:2','max:50'],
            'role_id' =>  ['required',],
            'department'  => ['required', Rule::in(getSpecialistDepartment())],
            'profile_photo_path' => ['nullable','mimes:jpeg,jpg,png'],
        ];
    }
}
