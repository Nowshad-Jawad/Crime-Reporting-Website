<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Complaint;
use App\Models\UpdateHistory;
use App\Models\User;

class CrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crimes = Complaint::paginate(5);
        return view('hq.crimelist', compact('crimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crime = Complaint::find($id);
        $user = User::where('email', $crime->p_info)->first();

        return view('pages.showprofile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($c_id)
    {
        $edit = Complaint::find($c_id);
        return view('hq.editcrime', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $c_id)
    {
        $this->validate($request,[
            'p_status'=>'required',
            'p_info'=>'required',
            'c_status'=>'required'
        ]);

        $edit = Complaint::find($c_id);
        $history = new UpdateHistory();
        $edit->c_id = $request->input('c_id');
        $edit->report_by = $request->input('report_by');
        $edit->c_type = $request->input('c_type');
        $edit->c_loc = $request->input('c_loc');
        $edit->desc = $request->input('desc');
        $edit->p_status = $request->input('p_status');
        $edit->p_info = $request->input('p_info');
        $edit->c_status = $request->input('c_status');
        $history->crime_id = $edit->c_id;
        $history->p_status = $edit->p_status;
        $history->p_info = $edit->p_info;
        $history->c_status = $edit->c_status;
        $history->updated_at = $edit->updated_at;
        $edit->save();
        $history->save();

        return redirect()->back();
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
