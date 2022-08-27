<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Complaint;
use App\Models\UpdateHistory;


class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user()->email;
        $complains = Complaint::where('report_by', $user)->paginate(4);

        return view('civillian.showcomplains', compact('complains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('civillian.makecomplain');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'c_type' => 'required',
            'c_loc' => 'required',
            'desc' => 'required',
        ]);

        $user = Auth::user()->email;

        $store = new Complaint;
        $store->c_type = $request->input('c_type');
        $store->c_loc = $request->input('c_loc');
        $store->desc = $request->input('desc');

        $store->report_by = $user;

        $store->save();

        return redirect('/complain')->with('message', 'Complaint Registered. You will be notified soon with an update.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($c_id)
    {
        $histories = UpdateHistory::where('crime_id', $c_id)->get();
        return view('civillian.updatehistory', compact('histories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
