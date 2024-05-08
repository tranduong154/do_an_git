<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PutPitch extends Model
{
    protected $table = 'dat_san';
    protected $fillable = [
        'ma_tk',
        'ngay_dat',
        'ten_nguoi_dat',
        'sdt_nguoi_dat',
        'so_tien_thanh_toan',
        'ma_trang_thai',
    ];
}