<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Member;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::all();
        $members = Member::all();
        return view('bills.index', compact('bills', 'members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($member)
    {
        //not working - use edit()
        // //$members = Member::all();
        // //$bill = DB::table('bills')->orderBy('created_at', 'desc')->where('member_id', $member->id)->first();
        // $bill = Bill::all();

        // return view('bills.create', compact('member', 'bill'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'transfer_id'=>'required',
        // 'admission_fee_amount'=>'required',
        // 'admission_fee_received'=>'required',
        // 'admission_fee_balance'=>'required',
        // 'share_money_amount'=>'required',
        // 'share_money_received'=>'required',
        // 'share_money_balance'=>'required',
        // 'cost_of_land_amount'=>'required',
        // 'cost_of_land_received'=>'required',
        // 'cost_of_land_balance'=>'required',
        // 'cost_of_corner_amount'=>'required',
        // 'cost_of_corner_received'=>'required',
        // 'cost_of_corner_balance'=>'required',
        // 'lease_documentation_amount'=>'required',
        // 'lease_documentation_received'=>'required',
        // 'lease_documentation_balance'=>'required',
        // 'cost_of_development_amount'=>'required',
        // 'cost_of_development_received'=>'required',
        // 'cost_of_development_balance'=>'required',
        // 'cost_of_transfer_amount'=>'required',
        // 'cost_of_transfer_received'=>'required',
        // 'cost_of_transfer_balance'=>'required',
        // 'from'=>'required',
        // 'vide_account_no'=>'required',
        // 'establishment_charges_amount'=>'required',
        // 'establishment_charges_received'=>'required',
        // 'establishment_charges_balance'=>'required',
        // 'miscellaneous_amount'=>'required',
        // 'miscellaneous_received'=>'required',
        // 'miscellaneous_balance'=>'required',
        // 'cost_of_forms_amount'=>'required',
        // 'cost_of_forms_received'=>'required',
        // 'cost_of_forms_balance'=>'required',
        // 'ledger_account_no'=>'required'
        // ]);
        $bill = new Bill([
            'member_id' => $request->get('member_id'),
        'admission_fee_amount' => $request->get('admission_fee_amount'),
        'admission_fee_received' => $request->get('admission_fee_received'),
        'admission_fee_balance' => $request->get('admission_fee_balance'),
        'share_money_amount' => $request->get('share_money_amount'),
        'share_money_received' => $request->get('share_money_received'),
        'share_money_balance' => $request->get('share_money_balance'),
        'cost_of_land_amount' => $request->get('cost_of_land_amount'),
        'cost_of_land_received' => $request->get('cost_of_land_received'),
        'cost_of_land_balance' => $request->get('cost_of_land_balance'),
        'cost_of_corner_amount' => $request->get('cost_of_corner_amount'),
        'cost_of_corner_received' => $request->get('cost_of_corner_received'),
        'cost_of_corner_balance' => $request->get('cost_of_corner_balance'),
        'cost_of_road_facing_amount' => $request->get('cost_of_road_facing_amount'),
        'cost_of_road_facing_received' => $request->get('cost_of_road_facing_received'),
        'cost_of_road_facing_balance' => $request->get('cost_of_road_facing_balance'),
        'cost_of_west_open_amount' => $request->get('cost_of_west_open_amount'),
        'cost_of_west_open_received' => $request->get('cost_of_west_open_received'),
        'cost_of_west_open_balance' => $request->get('cost_of_west_open_balance'),
        'cost_of_park_facing_amount' => $request->get('cost_of_park_facing_amount'),
        'cost_of_park_facing_received' => $request->get('cost_of_park_facing_received'),
        'cost_of_park_facing_balance' => $request->get('cost_of_park_facing_balance'),
        'lease_documentation_amount' => $request->get('lease_documentation_amount'),
        'lease_documentation_received' => $request->get('lease_documentation_received'),
        'lease_documentation_balance' => $request->get('lease_documentation_balance'),
        'cost_of_development_amount' => $request->get('cost_of_development_amount'),
        'cost_of_development_received' => $request->get('cost_of_development_received'),
        'cost_of_development_balance' => $request->get('cost_of_development_balance'),
        'cost_of_transfer_amount' => $request->get('cost_of_transfer_amount'),
        'cost_of_transfer_received' => $request->get('cost_of_transfer_received'),
        'cost_of_transfer_balance' => $request->get('cost_of_transfer_balance'),
        'from' => $request->get('from'),
        'vide_account_no' => $request->get('vide_account_no'),
        'establishment_charges_amount' => $request->get('establishment_charges_amount'),
        'establishment_charges_received' => $request->get('establishment_charges_received'),
        'establishment_charges_balance' => $request->get('establishment_charges_balance'),
        'miscellaneous_amount' => $request->get('miscellaneous_amount'),
        'miscellaneous_received' => $request->get('miscellaneous_received'),
        'miscellaneous_balance' => $request->get('miscellaneous_balance'),
        'cost_of_forms_amount' => $request->get('cost_of_forms_amount'),
        'cost_of_forms_received' => $request->get('cost_of_forms_received'),
        'cost_of_forms_balance' => $request->get('cost_of_forms_balance'),
        'ledger_account_no' => $request->get('ledger_account_no'),
        'date' => $request->get('date'),
        'receipt_number' => $request->get('receipt_number')

        ]);
        $bill->save();
        $member = Member::find($request->get('member_id'));
        $balance = (int)$request->get('admission_fee_balance') +(int)$request->get('share_money_balance') +(int)$request->get('cost_of_land_balance') +(int)$request->get('cost_of_corner_balance') +(int)$request->get('lease_documentation_balance') +(int)$request->get('cost_of_development_balance') +(int)$request->get('cost_of_transfer_balance') +(int)$request->get('establishment_charges_balance') +(int)$request->get('miscellaneous_balance') +(int)$request->get('cost_of_forms_balance');
        if($balance > 0) {
            $member->status = 'Defaulter';
        }
        else {
            $member->status = 'Not Defaulter';
        }
        $member->save();
        
        return redirect('/members')->with('success', 'Bill saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit($memberid)
    {
        $member = Member::find($memberid);
        $bill = DB::table('bills')->orderBy('created_at', 'desc')->where('member_id', $member->id)->first();
        return view('bills.create', compact('member', 'bill'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        // $request->validate([
        //     'transfer_id'=>'required',
        //     'admission_fee_amount'=>'required',
        //     'admission_fee_received'=>'required',
        //     'admission_fee_balance'=>'required',
        //     'share_money_amount'=>'required',
        //     'share_money_received'=>'required',
        //     'share_money_balance'=>'required',
        //     'cost_of_land_amount'=>'required',
        //     'cost_of_land_received'=>'required',
        //     'cost_of_land_balance'=>'required',
        //     'cost_of_corner_amount'=>'required',
        //     'cost_of_corner_received'=>'required',
        //     'cost_of_corner_balance'=>'required',
        //     'lease_documentation_amount'=>'required',
        //     'lease_documentation_received'=>'required',
        //     'lease_documentation_balance'=>'required',
        //     'cost_of_development_amount'=>'required',
        //     'cost_of_development_received'=>'required',
        //     'cost_of_development_balance'=>'required',
        //     'cost_of_transfer_amount'=>'required',
        //     'cost_of_transfer_received'=>'required',
        //     'cost_of_transfer_balance'=>'required',
        //     'from'=>'required',
        //     'vide_account_no'=>'required',
        //     'establishment_charges_amount'=>'required',
        //     'establishment_charges_received'=>'required',
        //     'establishment_charges_balance'=>'required',
        //     'miscellaneous_amount'=>'required',
        //     'miscellaneous_received'=>'required',
        //     'miscellaneous_balance'=>'required',
        //     'cost_of_forms_amount'=>'required',
        //     'cost_of_forms_received'=>'required',
        //     'cost_of_forms_balance'=>'required',
        //     'ledger_account_no'=>'required'
        // ]);
        
            $bill->transfer_id = $request->get('transfer_id');
        $bill->admission_fee_amount  = $request->get('admission_fee_amount');
        $bill->admission_fee_received  = $request->get('admission_fee_received');
        $bill->admission_fee_balance  = $request->get('admission_fee_balance');
        $bill->share_money_amount  = $request->get('share_money_amount');
        $bill->share_money_received  = $request->get('share_money_received');
        $bill->share_money_balance  = $request->get('share_money_balance');
        $bill->cost_of_land_amount  = $request->get('cost_of_land_amount');
        $bill->cost_of_land_received  = $request->get('cost_of_land_received');
        $bill->cost_of_land_balance  = $request->get('cost_of_land_balance');
        $bill->cost_of_corner_amount  = $request->get('cost_of_corner_amount');
        $bill->cost_of_corner_received  = $request->get('cost_of_corner_received');
        $bill->cost_of_corner_balance  = $request->get('cost_of_corner_balance');
        $bill->lease_documentation_amount  = $request->get('lease_documentation_amount');
        $bill->lease_documentation_received  = $request->get('lease_documentation_received');
        $bill->lease_documentation_balance  = $request->get('lease_documentation_balance');
        $bill->cost_of_development_amount  = $request->get('cost_of_development_amount');
        $bill->cost_of_development_received  = $request->get('cost_of_development_received');
        $bill->cost_of_development_balance  = $request->get('cost_of_development_balance');
        $bill->cost_of_transfer_amount  = $request->get('cost_of_transfer_amount');
        $bill->cost_of_transfer_received  = $request->get('cost_of_transfer_received');
        $bill->cost_of_transfer_balance  = $request->get('cost_of_transfer_balance');
        $bill->from  = $request->get('from');
        $bill->vide_account_no  = $request->get('vide_account_no');
        $bill->establishment_charges_amount  = $request->get('establishment_charges_amount');
        $bill->establishment_charges_received  = $request->get('establishment_charges_received');
        $bill->establishment_charges_balance  = $request->get('establishment_charges_balance');
        $bill->miscellaneous_amount  = $request->get('miscellaneous_amount');
        $bill->miscellaneous_received  = $request->get('miscellaneous_received');
        $bill->miscellaneous_balance  = $request->get('miscellaneous_balance');
        $bill->cost_of_forms_amount  = $request->get('cost_of_forms_amount');
        $bill->cost_of_forms_received  = $request->get('cost_of_forms_received');
        $bill->cost_of_forms_balance  = $request->get('cost_of_forms_balance');
        $bill->ledger_account_no  = $request->get('ledger_account_no');

        $bill->save();
        return redirect('/members')->with('success', 'Bill updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return redirect('/bill')->with('success', 'Bill deleted!');
    }
}
