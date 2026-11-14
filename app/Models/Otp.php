<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{

    protected $fillable = [
        'phone',
        'code_hash',
        'expires_at',
        'used'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'used' => 'boolean',
    ];
}
