<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PutPitchDetail extends Model
{
    protected $table = 'chi_tiet_dat_san';
    protected $fillable = [
        'ma_tk',
        'ma_dat_san',
        'ma_san',
        'khung_gio',
        'ma_loai_dv',
        'so_luong_dv',
        'ngay_su_dung',
        'ngay_gio_huy',
        'gia_tien',
    ];
}
