<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaerahDesakel extends Model
{
    //
    protected $table = 'kelurahan';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = ['nama', 'kecamatan_id'];
    public $timestamps = false;

    public function kecamatan() {
        return $this->belongsTo(DaerahKecamatan::class, 'kecamatan_id');
    }
}
