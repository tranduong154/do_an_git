<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'email' => 'required',
            // 'password' => 'required',
            'sdt' => 'required|max:11',
            // 'quoc_tich' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => 'Tên không được bỏ trống!',
            'email.required' => 'Email không được bỏ trống!',
            // 'password.required' => 'Mật khẩu không được bỏ trống!',
            'sdt.required' => 'Số điện thoại không được bỏ trống!',
            // 'quoc_tich.required' => ':Quốc tịch không được bỏ trống!',
            'sdt.max' => 'Số điện thoại không dược vượt quá 11 số!'
        ];
    }
}
