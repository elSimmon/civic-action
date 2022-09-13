<?php

namespace App\Http\Controllers;

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
        $org = DB::table('organizations')->where('user_id',  Auth::id())->first();
        if($org == null){
//            return view('front.create_organization');
            return redirect()->route('create-organization');
        }else{
            return view('front.dashboard');
        }

    }

    public function dashboard(){
        return view('back.dashboard');
    }
}
