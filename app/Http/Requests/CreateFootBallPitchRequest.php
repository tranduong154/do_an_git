<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFootBallPitchRequest extends FormRequest
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
            'ma_loai_san' => 'required',
            'ten' => 'required',
            'mo_ta' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ma_loai_san.required' => 'Mã loại sân không được bỏ trống!',
            'ten.required' => 'Tên loại sân không được bỏ trống!',
            'mo_ta.required' => 'Mô tả loại sân không được bỏ trống!',
        ];
    }
}
