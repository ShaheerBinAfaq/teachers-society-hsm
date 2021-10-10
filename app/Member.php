<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'cnic',
        'fathers_name',
        'occupation',
        'address',
        'phone'     
    ];
}
