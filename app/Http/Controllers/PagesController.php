<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\State;
use App\Models\View;
use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function welcome(){
        //$campaigns = DB::table('campaigns')->where('approved', '>', 0)->latest()->take(9)->get();
        $campaigns = Campaign::latest()->where('approved', '=', 1)->take(9)->get();
        return view('welcome', compact('campaigns'));
    }

    public function explore(){
        $campaigns = Campaign::where('approved', '=', 1)->latest()->get();
        return view('front.explore_campaigns', compact('campaigns'));
    }

    public function showCategory($name){
        $cat = Category::where('name', $name)->latest()->get();
        $campaigns = Campaign::whereBelongsTo($cat)->where('approved', '=', 1)->latest()->get();
        return view('front.campaign_by_category', compact('campaigns', 'name'));
    }

    public function campaignDetails($id){
        $campaign = Campaign::findorFail($id);
        $states = State::all();
        $view = new View();
        $view->campaign_id = $id;
        $view->count = 1;
        $view->save();
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
