<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'day' => 'required|numeric|exists:days,id' ,
            'visit_type' => 'required|numeric|exists:visit_types,id',
            'start_time' => 'required'
        ];

    }

    public function messages()
    {
        return [

            'day.required' => 'the day fields is required',
            'visit_type.required' => 'the visit type fields is required',
            'start_time.required' => 'the start time fields is required',

            'day.*' => 'the day fields is valid',
            'visit_type.*' => 'the visit type fields is valid',
            'start_time.*' => 'the start time fields is valid',

        ];

    }


}
