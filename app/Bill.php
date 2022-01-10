<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'transfer_id',
        'admission_fee_amount',
        'admission_fee_received',
        'admission_fee_balance',
        'share_money_amount',
        'share_money_received',
        'share_money_balance',
        'cost_of_land_amount',
        'cost_of_land_received',
        'cost_of_land_balance',
        'cost_of_corner_amount',
        'cost_of_corner_received',
        'cost_of_corner_balance',
        'lease_documentation_amount',
        'lease_documentation_received',
        'lease_documentation_balance',
        'cost_of_development_amount',
        'cost_of_development_received',
        'cost_of_development_balance',
        'cost_of_transfer_amount',
        'cost_of_transfer_received',
        'cost_of_transfer_balance',
        'from',
        'vide_account_no',
        'establishment_charges_amount',
        'establishment_charges_received',
        'establishment_charges_balance',
        'miscellaneous_amount',
        'miscellaneous_received',
        'miscellaneous_balance',
        'cost_of_forms_amount',
        'cost_of_forms_received',
        'cost_of_forms_balance',
        'ledger_account_no'
    ];
}
