<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DetectionThresholdupdated extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'time_interval' => 'required|int|min:0',
            'bandwidth' => 'required|int|min:0',
            'status' => 'required' ,
            'status_frequency' => 'required|int|min:0',
            "path" => 'required' ,
            "path_frequency" => 'required|int|min:0',
            "host_frequency" => 'required|int|min:0',
        ];
    }
}
