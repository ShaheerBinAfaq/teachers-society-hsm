<?php

namespace App\Exports;

use App\Member;
use App\Bill;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class MemberBillExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('members')
            ->leftJoin('bills', 'members.id', '=', 'bills.member_id')
            ->whereRaw('bills.id IN (SELECT MAX(id) FROM bills GROUP BY member_id)')
            ->get();
    }
}
