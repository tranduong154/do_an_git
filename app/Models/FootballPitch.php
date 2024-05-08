<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootballPitch extends Model
{
    CONST LIST_TIME_ORDER = [
        5   => '05:00-06:00',
        6   => '06:00-07:00',
        7   => '07:00-08:00',
        8   => '08:00-09:00',
        9   => '09:00-10:00',
        14  => '14:00-15:00',
        15  => '15:00-16:00',
        16  => '16:00-17:00',
        17  => '17:00-18:00',
        18  => '18:00-19:00',
        19  => '19:00-20:00',
        20  => '20:00-21:00',
        21  => '21:00-22:00',
        22  => '22:00-23:00',
        23  => '23:00-24:00',
    ];

    CONST LIST_SERVICE_ORDER = [
        1   => '1',
        2   => '2',
        3   => '3',
        4   => '4',
        5   => '5',
    ];

    

    protected $table = 'san';
    protected $fillable = [
        'ma_loai_san',
        'ten',
        'mo_ta',
    ];

    public function PutPitchDetai() {
        return $this->belongsTo('App\Models\PutPitchDetai');
    }
}