<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Target;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        return view('back.targets', compact('targets', 'states'));
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
            'constituency' => 'required|string',
            'designation' => 'required|string',
            'phone_number' => 'required|numeric',
            'email' => 'required|email|max:128'
        ]);
        $tag = new Target();
        $tag->fullname = $request['fullname'];
        $tag->state_id = $request['state_id'];
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
        toast('New Target Added', 'success');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
