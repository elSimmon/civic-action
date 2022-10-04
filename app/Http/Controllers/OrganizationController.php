<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class OrganizationController extends Controller
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
        $organizations = Organization::all();
        return view('back.organizations', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.create_organization');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $org = new Organization();
        $org->user_id = Auth::id();
        $org->name = $request->name;
        $org->email = $request->email;
        $org->phone = $request->phone;
        $org->address = $request->address;
        $org->about = $request->about;
        $org->website = $request->website;

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('logos/'.$filename);
            Image::make($image)->save($location);
            $org->logo = $filename;
        }
        $org->save();
        Alert::success('Congratulations!', 'Your Organizational Profile has been created successfully!!');
        return redirect()->route('home');
    }

    public function profile(){
        $org = DB::table('organizations')->where('user_id', Auth::id())->first();
        return view('front.organization_profile', compact('org'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        DB::table('organizations')->where('user_id', Auth::id())->update(['name'=>$request->name, 'phone'=>$request->phone, 'email'=>$request->email, 'address'=>$request->address, 'about'=>$request->about, 'website'=>$request->website]);
        toast('Organization Updated', 'success');
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        Organization::find($organization)->delete();
        toast('Organization Removed!','error');
        return redirect('organizations');
    }
}
