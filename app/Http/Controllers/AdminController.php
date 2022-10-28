<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Organization;
use App\Models\Participation;
use App\Models\Target;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function dashboard(){
        $profiles = Organization::all();
        $campaigns = Campaign::all();
        $users = User::all();
        $targets = Target::all();
        $participants = Participation::all();
        $recent_participants = Participation::latest()->take(10)->get();
        $recent_users = User::latest()->take(10)->get();
        $recent_campaigns = Campaign::latest()->take(10)->get();
        $recent_targets = Target::latest()->take(10)->get();
        return view('back.dashboard', compact('profiles', 'campaigns', 'users', 'targets', 'participants', 'recent_participants', 'recent_users', 'recent_campaigns', 'recent_targets'));
    }
}
