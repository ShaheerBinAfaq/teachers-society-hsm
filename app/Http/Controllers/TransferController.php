<?php

namespace App\Http\Controllers;

use App\transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = transfer::all();
        return view('transfers.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transfers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_id'=>'required',
            'transfree_id'=>'required',
        ]);
        $transfer = new transfer([
            'member_id' => $request->get('member_id'),
            'transfree_id' => $request->get('transfree_id')        
        ]);
        $transfer->save();
        return redirect('/transfer')->with('success', 'transfer saved!');
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
