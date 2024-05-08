<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
            'ma_loai_dv' => 'required',
            'ten' => 'required',
            'gia_tien' => 'required',
            'don_vi' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ma_loai_dv.required' => 'Mã loại dịch vụ không được bỏ trống!',
            'ten.required' => 'Tên loại dịch vụ không được bỏ trống!',
            'gia_tien.required' => 'Giá dịch vụ không được bỏ trống!',
            'don_vi.required' => 'Đơn vị dịch vụ không được bỏ trống!',
        ];
    }
}
