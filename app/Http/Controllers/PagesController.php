<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function welcome(){
        $campaigns = Campaign::all();
        return view('welcome', compact('campaigns'));
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
