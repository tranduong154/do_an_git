<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRegulationRequest extends FormRequest
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
            'ten' => 'required',
            'noi_dung' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => 'Tên qui định không được bỏ trống!',
            'noi_dung.required' => 'Nội dung định không được bỏ trống!',
        ];
    }
}
