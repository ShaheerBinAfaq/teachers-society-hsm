<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjust extends Model
{
    protected $fillable = [
        'adjust_from',
        'receipt_no',
        'adjust_amount',
        'adjust_to',
        'receipt_date',
        'member_id',
        'bill_id',
    ];
}
