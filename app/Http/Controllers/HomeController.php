<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Complaint;
use App\Models\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::guest()){
            return view('pages.index');
        }

        else{
            $role = (Auth::user()->role);
            $email = (Auth::user()->email);

            if($role=='0'){
                $user = Auth::user()->email;
                $complains = Complaint::where('report_by', $user)->take(3)->latest()->get();
                $complainsCount = Complaint::where('report_by', $user)->count();
                $inbox = Message::where('recipient', Auth::user()->email)->latest()->get();
                $sent = Message::where('sender', Auth::user()->email)->latest()->get();
                return view('civillian.dashboard', compact('complains', 'complainsCount', 'inbox', 'sent')); 
            }

            elseif($role=='1'){
                $assigns = Complaint::where('p_info', $email)->take(4)->latest()->get();
                $assigncount = Complaint::where('p_info', $email)->count();
                $inbox = Message::where('recipient', Auth::user()->email)->latest()->get();
                $sent = Message::where('sender', Auth::user()->email)->latest()->get();
                return view('police.dashboard', compact('assigns', 'assigncount', 'inbox', 'sent'));
            }

            else{

                $users = User::latest()->paginate(4);
                $usercount = User::count();
                $civillianscount = User::where('role', 0)->count();
                $policescount = User::where('role', 1)->count();
                $crimecount = Complaint::count();
                $crimes = Complaint::take(3)->latest()->get();
                $civillians = User::where('role', 0)->take(3)->latest()->get();
                $polices = User::where('role', 1)->take(3)->latest()->get();
                $messages = Message::take(3)->latest()->get();
                $inbox = Message::where('recipient', Auth::user()->email)->latest()->get();
                $sent = Message::where('sender', Auth::user()->email)->latest()->get();
                $solvecount = Complaint::where('c_status', 'Solved')->count();
                return view('hq.dashboard', compact('usercount', 'solvecount', 'civillianscount', 'policescount', 'crimecount', 'crimes', 'civillians', 'polices', 'messages', 'inbox', 'sent', 'users')); 
        }

    }
    }
}
