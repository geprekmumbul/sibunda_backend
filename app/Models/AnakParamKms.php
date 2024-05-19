<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakParamKms extends Model
{
    use HasFactory;
    protected $table = 'anak_param_kms';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = [
        'is_laki',
        'month',
        'minus_3_sd',
        'minus_2_sd',
        'minus_1_sd',
        'median',
        'plus_1_sd',
        'plus_2_sd',
        'plus_3_sd'
    ];
}
