<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaerahKecamatan extends Model
{
    //
    protected $table = 'kecamatan';
    protected $fillable = ['nama', 'kota_id'];
    public $timestamps = false;

    public function kota() {
        return $this->belongsTo(DaerahKotakab::class, 'kota_id');
    }
}
