<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Target;
use App\Models\TargetCategory;
use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class TargetController extends Controller
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
        $targets = Target::all();
        $states = State::all();
        $target_categories = TargetCategory::all();
        return view('back.targets', compact('targets', 'states', 'target_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,svg|max:5000',
            'fullname' => 'required|string',
            'state_id' => 'required|string',
            'target_category_id' => 'required|string',
            'constituency' => 'required|string',
            'designation' => 'required|string',
            'phone_number' => 'required|numeric',
            'email' => 'required|email|max:128'
        ]);
        $tag = new Target();
        $tag->fullname = $request['fullname'];
        $tag->state_id = $request['state_id'];
        $tag->target_category_id = $request['target_category_id'];
        $tag->constituency = $request['constituency'];
        $tag->designation = $request['designation'];
        $tag->phone_number = $request['phone_number'];
        $tag->email = $request['email'];
        $tag->approved = 1;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('targets/'.$filename);
            Image::make($image)->save($location);
            $tag->image = $filename;
        }
        $tag->save();
        Alert('Target Added Successfully', 'Your Target database has been updated');
        return back();
    }

    public function targetUpload(){
        $states = State::all();
        return view('front.create_new_targets', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$image = $request->image;
        $fullname = $request->fullname;
        $state_id = $request->state_id;
        $constituency = $request->constituency;
        $phone_number = $request->phone_number;
        $email = $request->email;

        for ($i=0; $i < count($fullname); $i++){
            if($request->hasFile('image')){
                $files = $request->file('image');
                foreach ($files as $file){
                    $filename = $file->getClientOriginalName();
                    $extension = strtolower($file->getClientOriginalExtension());
                    $fileName = time().".".$extension;
                    $destinationPath = 'public/targets/';
                    //$location = public_path('targets/'.$filename);
                    //Image::make($image)->save($location);
                    $file->move($destinationPath, $filename);
                }
            }
            $datasave = [
                'image' => $fileName,
                'fullname' => $fullname,
                'state_id' => $state_id,
                'constituency' => $constituency,
                'phone_number' => $phone_number,
                'email' => $email
            ];
            DB::table('targets')->insert($datasave);
        }
        Alert('Success Upload', 'Please waite for about 24 hrs.', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function show(Target $target)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function edit(Target $target)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Target $target)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        //
    }
}
