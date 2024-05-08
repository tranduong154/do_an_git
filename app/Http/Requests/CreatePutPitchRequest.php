<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePutPitchRequest extends FormRequest
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
            'ten_nguoi_dat' => 'required',
            'sdt_nguoi_dat' => 'required',
            'ngay_dat' => 'required',
            'so_tien_thanh_toan' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten_nguoi_dat.required' => 'Tên người đặt không được bỏ trống!',
            'sdt_nguoi_dat.required' => 'SDT người đặt không được bỏ trống!',
            'ngay_dat.required' => 'Ngày đặt không được bỏ trống!',
            'so_tien_thanh_toan.required' => 'Số tiền thanh toán không được bỏ trống!',
        ];
    }
}
