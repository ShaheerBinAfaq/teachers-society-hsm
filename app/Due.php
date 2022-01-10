<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Due extends Model
{
    protected $fillable = [
        'internal_development_amount',
        'internal_development_received',
        'internal_development_balance',
        'society_lease_amount',
        'society_lease_received',
        'society_lease_balance',
        'cost_of_land_amount',
        'cost_of_land_received',
        'cost_of_land_balance',
        'maintenance_amount',
        'maintenance_received',
        'maintenance_balance',
        'member_id'     
    ];
}
