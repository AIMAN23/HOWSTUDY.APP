<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'uuid',
        'phone',
        'wep',
        'tell',
        'logo',
        'email',
        'address_id',
        'password',
        'created_at','updated_at'
    ];
}

