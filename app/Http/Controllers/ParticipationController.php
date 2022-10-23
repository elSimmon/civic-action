<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Lga;
use App\Models\Participation;
use App\Models\State;
use App\Models\Target;
use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pats = Participation::all();
        return view('back.participations', compact('pats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pats = Participation::where('organization_id', Auth::user()->organization->id)->get();
        return view('front.participations', compact('pats'));
    }


    public function getLgas($id=0){
        $lgaData['data'] = Lga::orderBy('name', 'asc')->select('id', 'name')->where('state_id', $id)->get();
        return response()->json($lgaData);
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
           'campaign_id' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'state_id' => 'required',
            'lga_id' => 'required'
        ]);


        Participation::create($request->all());
        Alert('Participation Added', 'please contact the target and bring back a review', 'success');
        return redirect('explore');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $campaign = Campaign::find($request->campaign_id);
        $lgas = Lga::where('state_id', $request->state_id)->get();
        $targets = Target::where(['state_id'=>$request->state_id, 'target_category_id'=>$request->target_category_id])->get();
        $state = State::find($request->state_id);
        return view('front.participate', compact('lgas', 'campaign', 'targets', 'state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(Participation $participation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participation $participation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participation $participation)
    {
        //
    }
}
