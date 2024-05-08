<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
            'ngay_sinh' => 'required',
            'dia_chi' => 'required',
            'sdt' => 'required|max:11',
            'gioi_tinh' => 'required',
            'quoc_tich' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => 'Tên không được bỏ trống!',
            'ngay_sinh.required' => 'Ngày sinh không được bỏ trống!',
            'dia_chi.required' => 'Địa chỉ không được bỏ trống!',
            'sdt.required' => 'Số điện thoại không được bỏ trống!',
            'gioi_tinh.required' => 'Giới tính không được bỏ trống!',
            'quoc_tich.required' => ':Quốc tịch không được bỏ trống!',
            'sdt.max' => 'Số điện thoại không dược vượt quá 11 số!'
        ];
    }
}
