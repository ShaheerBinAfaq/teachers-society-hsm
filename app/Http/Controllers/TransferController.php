<?php

namespace App\Http\Controllers;

use App\transfer;
use App\Member;
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

        $member = Member::find($request->get('transfree_id'));
        //$member = DB::table('members')->where('id', $request->get('transfree_id'))->first();
        //$prevTransfer = Transfer::find($request->get('msid'));
        $prevTransfer = DB::table('transfers')->orderBy('created_at', 'desc')->where('msid', $request->get('msid'))->first();

        $transfer = new transfer([
            'member_id' => $request->get('member_id'),
            'transfree_id' => $request->get('transfree_id'),
            //'plot_category' => $request->get('plot_category'),
            //'plot_no' => $request->get('plot_no'),
            'msid' => $request->get('msid'),
            'dei' => $member->dei,
            'survey' => $member->survey,
            'phase' => $member->phase,
            'block' => $member->block,
            'tran_no' => $prevTransfer->tran_no + 1
        ]);
        $transfer->save();

        // transfering msid
        $member->msid = $request->get('msid');
        $member->save();
        // $message = 'transfer saved! ' + $request->get('msid');
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
