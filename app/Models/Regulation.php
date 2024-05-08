<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    protected $table = 'qui_dinh';
    protected $fillable = [
        'ten',
        'noi_dung',
    ];
}
