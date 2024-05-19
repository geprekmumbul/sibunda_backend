<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceStatementIbuImmunization extends Model
{
    use HasFactory;
    protected $table = 'service_statement_ibu_immunization';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = [
      'immunization_id',
      'date',
      'location',
      'pic',
      'trimester',
      'kia_ibu_id'
    ];
}
