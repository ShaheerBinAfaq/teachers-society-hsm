<?php

namespace App;

use App\Bill;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'cnic',
        'fathers_name',
        'occupation',
        'address',
        'phone',
        'email',
        'msid',
        'status',
        'dei',
        'survey',
        'phase',
        'block',
        'plot_no',
        'plot_category',
        'allotment_no',  
        'date',  
        'allotment_date',  
        'total_balance',  
    ];
    public function bills()
    {
        return $this->hasMany(Bill::class, 'member_id', 'id');
    }
}
