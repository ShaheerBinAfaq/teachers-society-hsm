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
        'id',
        'created_at',
        'updated_at',
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
    }
    public function collection()
    {
        return DB::table('members')
            ->leftJoin('bills', 'members.id', '=', 'bills.member_id')
            ->whereRaw('bills.id IN (SELECT MAX(id) FROM bills GROUP BY member_id)')
            ->get();
    }
}
