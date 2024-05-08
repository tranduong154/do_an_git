<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceTime extends Model
{
    protected $table = 'gia_theo_khung_gio';
    protected $fillable = [
        'ma_loai_san',
        'khung_gio',
        'gia_tien',
    ];
}
