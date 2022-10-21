<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\Lga;
use App\Models\State;
use App\Models\Target;
use App\Models\TargetCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camps = Campaign::all();
        return view('back.campaigns', compact('camps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $states = State::all();
        $target_categories = TargetCategory::all();
        return view('front.create_campaign', compact('categories', 'states', 'target_categories'));
    }

    public function getLgas($id=0){
        $lgaData['data'] = Lga::orderBy('name', 'asc')->select('id', 'name')->where('state_id', $id)->get();
        return response()->json($lgaData);
    }

    public function getTargets($id=0){
        $targetData['data'] = Target::orderBy('fullname', 'asc')->select('id', 'fullname', 'designation')->where('state_id', $id)->get();
        return response()->json($targetData);
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
            'goal'=>'required|numeric'
        ]);

        $org = DB::table('organizations')->where('user_id', Auth::id())->first();
        $campaign = new Campaign();
        $campaign->organization_id = $org->id;
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->objective = $request->objective;
        $campaign->category_id = $request->category_id;
        $campaign->target_category_id = $request->target_category_id;
        $campaign->state_id = $request->state_id;
        $campaign->lga_id = $request->lga_id;
        $campaign->goal = $request->goal;
        $campaign->type = $request->type;
        $campaign->message = $request->message;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('campaign_images/'.$filename);
            Image::make($image)->save($location);
            $campaign->image = $filename;
        }
        $campaign->save();

        Alert('Campaign Created Successfully', 'Please wait for admin to approve your campaign', 'success');
        return redirect('my-campaigns');
    }

    public function myCampaigns(){
        $camps = Campaign::where('organization_id', Auth::user()->organization->id)->get();
//        $camps = DB::table('campaigns')->where('organization_id', Auth::user()->organization->id)->get();
        return view('front.my_campaigns', compact('camps'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
