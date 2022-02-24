<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('Members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            'name'=>'required',
            'cnic'=>'required',
            'fathers_name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'msid'=>'required'
        ]);
        $member = new Member([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'fathers_name' => $request->get('fathers_name'),
            'occupation' => $request->get('occupation'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'msid' => $request->get('msid'),
            'dei' => $request->get('dei'),
            'survey' => $request->get('survey'),
            'phase' => $request->get('phase'),
            'block' => $request->get('block'),
            'plot_no' => $request->get('plot_no'),
            'plot_category' => $request->get('plot_category')
        ]);
        $member->save();
        return redirect('/members')->with('success', 'Member saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name'=>'required',
            'cnic'=>'required',
            'fathers_name'=>'required',
            'address'=>'required',
            'phone'=>'required|string'
        ]);
        // $contact = Contact::find($id);
        $member->name = $request->get('name');
        $member->cnic = $request->get('cnic');
        $member->fathers_name = $request->get('fathers_name');
        $member->occupation = $request->get('occupation');
        $member->address = $request->get('address');
        $member->phone = $request->get('phone');
        $member->email = $request->get('email');
        $member->msid = $request->get('msid');
        $member->plot_no = $request->get('plot_no');
        $member->plot_category = $request->get('plot_category');

        $member->save();
        return redirect('/members')->with('success', 'Member updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect('/members')->with('success', 'Member deleted!');
    }
}
