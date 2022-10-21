<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TargetCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TargetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = TargetCategory::all();
        return view('back.target_categories', compact('categories'));
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
            'name' => 'required'
        ]);

        $category = new TargetCategory();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        Alert::success('Target Category created successfully!');
        return redirect()->route('target-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TargetCategory  $targetCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TargetCategory $targetCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TargetCategory  $targetCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TargetCategory $targetCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TargetCategory  $targetCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TargetCategory $targetCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TargetCategory  $targetCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TargetCategory $targetCategory)
    {
        //
    }
}
