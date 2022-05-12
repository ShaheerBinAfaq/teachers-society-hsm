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
        'Members.Date',
        'Cost Of Land Amount',
        'Cost Of Land Received',
        'Cost Of Land Balance',
        'Lease Documentation Amount',
        'Lease Documentation Received',
        'Lease Documentation Balance',
        'Bills.Date',
        'Cost Of Development Amount',
        'Cost Of Development Received',
        'Cost Of Development Balance',
        'Cost Of Corner Amount',
        'Cost Of West Open Amount',
        'Cost Of Park Facing Amount',
        'Cost Of Road Facing Amount',
        'Total Balance',
        'Penalty',
        'Phone',
        ];
    }
    public function collection()
    {
        return DB::table('members')
            ->leftJoin('bills', 'members.id', '=', 'bills.member_id')
            ->whereRaw('bills.id IN (SELECT MAX(id) FROM bills GROUP BY member_id) AND members.updated_at IN (SELECT MAX(updated_at) FROM members GROUP BY msid)')
            ->select(
                'status',
                'msid',
                'name',
                'fathers_name',
                'address',
                'members.allotment_date',
                'cost_of_land_amount',
                'cost_of_land_received',
                'cost_of_land_balance',
                'lease_documentation_amount',
                'lease_documentation_received',
                'lease_documentation_balance',
                'bills.date',
                'cost_of_development_amount',
                'cost_of_development_received',
                'cost_of_development_balance',
                'cost_of_corner_amount',
                'cost_of_west_open_amount',
                'cost_of_park_facing_amount',
                'cost_of_road_facing_amount',
                'total_balance',
                'penalty',
                'phone'
                )
            ->get();
    }
}
