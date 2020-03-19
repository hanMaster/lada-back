<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'filialId' => 'required',
            'doctorId' => 'required',
            'specId' => 'required',
            'start' => 'required|string',
            'end' => 'required|string',
            'fname' => 'required|string|min:2|max:255',
            'mname' => 'required|string|min:2|max:255',
            'sname' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:12|max:12',
            'type' => 'required|integer'
        ];
    }
}
