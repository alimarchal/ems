<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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

        $email = \Request::input('email') ?? null;
        $employee = Employee::where('email', $email)->first();
        $id = $employee->id;

        return [
            'cnic' => "required|unique:employees,cnic,$id|min:15",
            'email' => "required|unique:employees,email,$id|max:255",
            'date_of_birth' => 'date_format:Y-m-d|before:today',
            'first_name' => 'required',
            'last_name' => 'required',
            'father_husband_name' => 'required',
            'mobile' => 'required|max:12',
            'gender' => 'required',
            'emergency_contact' => 'required|max:12',
            'district_city' => 'required',
            'appointment_date' => 'required',
            'designation' => 'required',
            'scale' => 'required',
            'employee_type' => 'required',
            'degree_name' => 'required',
            'passing_year' => 'required',
        ];
    }
}
