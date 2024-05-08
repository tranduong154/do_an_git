<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            'chi_tiet' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ma_loai_san.required' => 'Mã loại sân không được bỏ trống!',
            'chi_tiet.required' => 'Vui lòng chọn khung giờ!',
            // 'max' => ':attribute khong duoc qua :max ky tu!'
        ];
    }
}
