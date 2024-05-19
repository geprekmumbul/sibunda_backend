<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaerahKotakab extends Model
{
    //
    protected $table = 'kota';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = ['nama', 'provinsi_id'];
    public $timestamps = false;

    public function provinsi() {
        return $this->belongsTo(DaerahProvinsi::class, 'provinsi_id');
    }
}
