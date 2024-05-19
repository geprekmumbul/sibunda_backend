<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceStatementIbuHamil extends Model
{
    use HasFactory;
    protected $table = 'service_statement_ibu_hamil';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = [
        'img_url',
        'trimester',
        'kia_anak_id'
    ];

    public function kia_anak()  {
        return $this->belongsTo(KiaIdentitasAnak::class, 'kia_anak_id');
    }
}
