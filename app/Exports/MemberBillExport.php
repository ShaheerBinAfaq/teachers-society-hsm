<?php

namespace App\Exports;

use App\Member;
use App\Bill;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Illuminate\Support\Facades\DB;

class MemberBillExport implements FromCollection, WithHeadings, WithStrictNullComparison
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Status',
            'Msid',
            'Name',
            'Fathers Name',
            'Address',
            'Phone',
            'Allotment Number',
            'Date Of Allotment',
            'DEI',
            'Survey',
            'Phase',
            'Block',
            'Plot Number',
            'Plot Category',
            'Admission Fee Amount',
            'Admission Fee Received',
            'Admission Fee Balance',
            'Share Money Amount',
            'Share Money Received',
            'Share Money Balance',
            'Cost Of Land Amount',
            'Cost Of Land Received',
            'Cost Of Land Balance',
            'Lease Documentation Amount',
            'Lease Documentation Received',
            'Lease Documentation Balance',
            'Maintenance Charges Amount',
            'Maintenance Charges Received',
            'Maintenance Charges Balance',
            'Last Date Of Payment',
            'Cost Of Development Amount',
            'Cost Of Development Received',
            'Cost Of Development Balance',
            'Cost Of Corner Amount',
            'Cost Of Corner Received',
            'Cost Of Corner Balance',
            'Cost Of West Open Amount',
            'Cost Of West Open Received',
            'Cost Of West Open Balance',
            'Cost Of Park Facing Amount',
            'Cost Of Park Facing Received',
            'Cost Of Park Facing Balance',
            'Cost Of Road Facing Amount',
            'Cost Of Road Facing Received',
            'Cost Of Road Facing Balance',
            'Cost Of Extra Land Amount',
            'Cost Of Extra Land Received',
            'Cost Of Extra Land Balance',
            'Penalty',
            'Total Balance',
        ];
    }
    public function collection()
    {
        return DB::table('members')
            ->leftJoin('bills', 'members.msid', '=', 'bills.msid')
            ->whereRaw('bills.id IN (SELECT MAX(id) FROM bills GROUP BY msid) AND members.id IN (SELECT MAX(id) FROM members GROUP BY msid)')
            ->select(
                'status',
                'members.msid',
                'name',
                'fathers_name',
                'address',
                'phone',
                'members.allotment_no',
                'members.allotment_date',
                'members.dei',
                'members.survey',
                'members.phase',
                'members.block',
                'members.plot_no',
                'members.plot_category',
                'admission_fee_amount',
        'admission_fee_received',
        'admission_fee_balance',
        'share_money_amount',
        'share_money_received',
        'share_money_balance',
        'cost_of_land_amount',
                'cost_of_land_received',
                'cost_of_land_balance',
                'lease_documentation_amount',
                'lease_documentation_received',
                'lease_documentation_balance',
                'establishment_charges_amount',
                'establishment_charges_received',
                'establishment_charges_balance',
                'bills.date',
                'cost_of_development_amount',
                'cost_of_development_received',
                'cost_of_development_balance',
                'cost_of_corner_amount',
                'cost_of_corner_received',
                'cost_of_corner_balance',
                'cost_of_west_open_amount',
                'cost_of_west_open_received',
                'cost_of_west_open_balance',
                'cost_of_park_facing_amount',
                'cost_of_park_facing_received',
                'cost_of_park_facing_balance',
                'cost_of_road_facing_amount',
                'cost_of_road_facing_received',
                'cost_of_road_facing_balance',
                'cost_of_extra_land_facing_amount',
                'cost_of_extra_land_facing_received',
                'cost_of_extra_land_facing_balance',
                'penalty',
                'members.total_balance'
                )
            ->get();
    }
}
