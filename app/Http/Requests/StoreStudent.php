<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'roll_number' => 'required|size:6',
            'name' => 'required',
            'email' => 'required|unique:students',
            'phone_number' => 'required|size:10',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'cast' => 'required',
            'permanent_full_address' => 'required|min:6',
            'current_full_address' => 'required|min:6',
            'passed_college_name' => 'required|min:8',
            'passed_year' => 'required|size:4',
            'marks_obtain' => 'required|between:0,99.99'
            
        ];
    }
}
