<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    public $timestamps = false;
    protected $table = 'user_roles';
    protected $casts = [
        'id' => 'integer'
    ];
    protected $fillable = ['name'];
}
