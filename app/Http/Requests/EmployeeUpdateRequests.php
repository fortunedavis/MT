<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequests extends FormRequest
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

            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'profession'=>'required',
            'birth_date'=>'required',
            'start_date'=>'required',
            'address_hard'=>'required',
            'phone'=>'required',
            'address_mail'=>'required|email'

        ];
    }
}
