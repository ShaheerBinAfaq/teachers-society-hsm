<?php

namespace App\Http\Controllers;

use App\Adjust;
use App\Member;
use App\Bill;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdjustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adjusts = Adjust::all();
        return view('adjusts.index', compact('adjusts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adjusts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adjust = new Adjust([
            'adjust_from' => $request->get('adjust_from'),
            'receipt_no' => $request->get('receipt_no'),
            'adjust_amount' => $request->get('adjust_amount'),
            'adjust_to' => $request->get('adjust_to'),
            'receipt_date' => $request->get('receipt_date'),
            'member_id' => $request->get('member_id')
        ]);
        $adjust->save();

        $prevBill = Bill::where('member_id', $request->get('member_id'))
            ->orderBy('created_at', 'desc')
            ->first();
        $newBill = $prevBill->replicate();
        $newBill->receipt_number = $request->get('receipt_no');
        $newBill->date = $request->get('receipt_date');
        $col = $request->get('adjust_to');
        $newBill->$col = $newBill->$col + $request->get('adjust_amount');
        $newBill->total_received = $newBill->total_received + $request->get('adjust_amount');
        $newBill->total_balance = $newBill->total_balance - $request->get('adjust_amount');
        $newBill->save();

        $member = Member::find($request->get('member_id'));
        $member->total_balance = $member->total_balance - $request->get('adjust_amount');
        $member->save();

        return redirect('/members')->with('success', 'Adjust saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adjust  $adjust
     * @return \Illuminate\Http\Response
     */
    public function show(Adjust $adjust)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adjust  $adjust
     * @return \Illuminate\Http\Response
     */
    public function edit($memberid)
    {
        $member = Member::find($memberid);
        $members = Member::all()->sortByDesc('updated_at')->unique('msid');
        return view('adjusts.create', compact('member', 'members'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adjust  $adjust
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adjust $adjust)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adjust  $adjust
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adjust $adjust)
    {
        $adjust->delete();
        return redirect('/adjusts')->with('success', 'Adjust deleted!');
    }
}
