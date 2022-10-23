<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //this is user/organization dashboard
        $org = DB::table('organizations')->where('user_id',  Auth::id())->first();
        if($org == null){
            return redirect()->route('create-organization');
        }else{
            $my_campaigns = Campaign::where('organization_id', Auth::user()->organization->id)->get();
            return view('front.dashboard', compact('my_campaigns'));
        }

    }

}
