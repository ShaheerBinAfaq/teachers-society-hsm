<?php

namespace App\Http\Controllers;

use App\transfer;
use App\Member;
use App\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        $transfers = transfer::all();
        return view('transfers.index', compact('transfers', 'members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        return view('transfers.create', compact('members'));
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
        //     'member_id'=>'required',
        //     'transfree_id'=>'required',
        //     'plot_category'=>'required',
        //     'plot_no'=>'required'
        // ]);

        $member = Member::find($request->get('member_id'));
        $transfree = Member::find($request->get('transfree_id'));
        $tran_no = 1;
        if (DB::table('transfers')->orderBy('created_at', 'desc')->where('msid', $request->get('msid'))->exists()) {
            $prevTransfer = DB::table('transfers')->orderBy('created_at', 'desc')->where('msid', $request->get('msid'))->first();
            $tran_no = $prevTransfer->tran_no + 1;
        }

        $transfer = new transfer([
            'member_id' => $request->get('member_id'),
            'transfree_id' => $request->get('transfree_id'),
            'plot_category' => $member->plot_category,
            'plot_no' => $member->plot_no,
            'msid' => $request->get('msid'),
            'date' => $request->get('date'),
            'dei' => $member->dei,
            'survey' => $member->survey,
            'phase' => $member->phase,
            'block' => $member->block,
            'tran_no' =>  $tran_no,
            'status' => $request->get('status'),
            'return_to' => $request->get('return_to'),
            'return_amount' => $request->get('return_amount'),

        ]);
        $transfer->save();

        // transfering msid
        $transfree->msid = $request->get('msid');
        $transfree->allotment_no = $member->allotment_no;
        $transfree->allotment_date = $member->allotment_date;
        $transfree->plot_category = $member->plot_category;
        $transfree->plot_no = $member->plot_no;
        $transfree->dei = $member->dei;
        $transfree->survey = $member->survey;
        $transfree->phase = $member->phase;
        $transfree->block = $member->block;
        $transfree->transfer_no = $tran_no;
        $transfree->transfer_date = $request->get('date');
        $transfree->save();
        //setting member status of return
        // if($request->get('status') != 'Transferred') {
        //     $member->status = $request->get('status');
        // }
        // if(is_null($member->allotment_no)) {
        //     $transfree->status = 'Not Defaulter';
        // }
        // else {
        //     $transfree->status = 'Alottee';
        // }
        //$member->save();
        // $message = 'transfer saved! ' + $request->get('msid');

        //$prevBill = DB::table('bills')->orderBy('created_at', 'desc')->where('member_id', $request->get('member_id'))->first();
        // $prevBill = Bill::where('member_id', $request->get('member_id'))
        //        ->orderBy('created_at', 'desc')
        //        ->first();
        // $newBill = $prevBill->replicate();
        // $newBill->member_id = $request->get('transfree_id');
        // $newBill->receipt_number = $request->get('receipt_number');
        //$newBill->save();
        return redirect('/transfer')->with('success', 'transfer saved! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(transfer $transfer)
    {
        return view('transfers.edit', compact('transfer'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transfer $transfer)
    {
        $request->validate([
            'member_id'=>'required',
            'transfree_id'=>'required'        
        ]);
        
        $transfer->member_id = $request->get('member_id');
        $transfer->transfree_id = $request->get('transfree_id');

        $transfer->save();
        return redirect('/transfer')->with('success', 'transfer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(transfer $transfer)
    {
        $transfer->delete();
        return redirect('/transfer')->with('success', 'transfer deleted!');
    }
}
