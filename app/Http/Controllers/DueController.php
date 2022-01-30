<?php

namespace App\Http\Controllers;

use App\Due;
use App\Member;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $members = Member::find($member);
        return view('dues.create');
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
            
        ]);
        $due = new Due([
            'member_id' => $request->get('member_id'),
            'internal_development_amount' => $request->get('internal_development_amount'),
            'internal_development_received' => $request->get('internal_development_received'),
            'internal_development_balance' => $request->get('internal_development_balance'),
            'society_lease_amount' => $request->get('society_lease_amount'),
            'society_lease_received' => $request->get('society_lease_received'),
            'society_lease_balance' => $request->get('society_lease_balance'),
            'cost_of_land_amount' => $request->get('cost_of_land_amount'),
            'cost_of_land_received' => $request->get('cost_of_land_received'),
            'cost_of_land_balance' => $request->get('cost_of_land_balance'),
            'maintenance_amount' => $request->get('maintenance_amount'),
            'maintenance_received' => $request->get('maintenance_received'),
            'maintenance_balance' => $request->get('maintenance_balance')
        ]);
        $member = Member::find($request->get('member_id'));
        $balance = (int)$request->get('internal_development_balance') + (int)$request->get('cost_of_land_balance') + (int)$request->get('maintenance_balance') + (int)$request->get('society_lease_balance');
        if($balance > 0) {
            $member->status = 'Defaulter';
        }
        else {
            $member->status = 'Not Defaulter';
        }
        $due->save();
        $member->save();
        return redirect('/members')->with('success', 'Due saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function show(Due $due)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function edit($memberid)
    {
        $member = Member::find($memberid);
        $bills = DB::table('bills')->orderBy('created_at', 'desc')->where('member_id', $member->id)->get();
        return view('report.index', compact('member', 'bills')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Due $due)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function destroy(Due $due)
    {
        //
    }
    public function report($memberid)
    {
        $member = Member::find($memberid);
        $bills = DB::table('bills')->orderBy('created_at', 'desc')->where('member_id', $member->id)->get();
        return view('report.index', compact('member', 'bills')); 
    }
}
