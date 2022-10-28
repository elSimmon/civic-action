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
        $camps = Campaign::latest()->paginate(8);
        return view('back.campaigns', compact('camps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $org = DB::table('organizations')->where('user_id',  Auth::id())->first();
        if($org == null){
            return redirect()->route('create-organization');
        }else {
            $categories = Category::all();
            $states = State::all();
            $target_categories = TargetCategory::all();
            return view('front.create_campaign', compact('categories', 'states', 'target_categories'));
        }
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
        $camps = Campaign::where('organization_id', Auth::user()->organization->id)->latest()->paginate(5);
        return view('front.my_campaigns', compact('camps'));
    }

    public function approve($id){
        DB::table('campaigns')->where('id', $id)->update(['approved'=>1]);
        Alert('Campaign Approved', '', 'success');
        return back();
    }

    public function decline($id){
        DB::table('campaigns')->where('id', $id)->update(['approved'=>0]);
        Alert('Campaign Declined', '', 'error');
        return back();
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
    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        $categories = Category::all();
        $states = State::all();
        $target_categories = TargetCategory::all();
        return view('front.edit_campaign', compact('categories', 'states', 'target_categories', 'campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'goal'=>'required|numeric'
        ]);

        DB::table('campaigns')->where('id', $id)->update(['title'=>$request->title, 'description'=>$request->description, 'objective'=>$request->objective, 'category_id'=>$request->category_id, 'target_category_id'=>$request->target_category_id, 'type'=>$request->type, 'message'=>$request->message, 'goal'=>$request->goal, 'approved'=>0]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('campaign_images/'.$filename);
            Image::make($image)->save($location);

            DB::table('campaigns')->where('id', $id)->update(['image'=>$filename, 'approved'=>0]);
        }

        Alert('Campaign Updated Successfully', 'Please wait for admin to approve your campaign', 'success');
        return redirect('my-campaigns');
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
