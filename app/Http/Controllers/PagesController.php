<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\State;
use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function welcome(){
        //$campaigns = DB::table('campaigns')->where('approved', '>', 0)->latest()->take(9)->get();
        $campaigns = Campaign::latest()->take(9)->get();
        return view('welcome', compact('campaigns'));
    }

    public function explore(){
        $campaigns = DB::table('campaigns')->where('approved', '>', 0)->paginate(12);
        return view('front.explore_campaigns', compact('campaigns'));
    }

    public function campaignDetails($id){
        $campaign = Campaign::findorFail($id);
        $states = State::all();
        return view('front.campaign_details', compact('campaign', 'states'));
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function terms(){
        return view('pages.privacy_terms');
    }
}
