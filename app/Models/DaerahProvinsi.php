<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaerahProvinsi extends Model
{
    //
    protected $table = 'provinsi';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = ['nama'];
    public $timestamps = false;
}
