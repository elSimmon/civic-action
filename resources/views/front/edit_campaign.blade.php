@extends('layouts.main')
@section('title', 'Edit Campaign')

@section('content')
    <section class="our-dashbord dashbord bgc-f4 ovh">
        <div class="container mt80">
            <div class="row">
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2 mb25">
                        <h2 class="breadcrumb_title">Edit Campaign</h2>
                        <h4><a href="{{route('my-campaigns')}}"><span class="fa fa-arrow-circle-o-left text-success"></span> Back to My Campaigns</a> </h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <form method="POST" action="{{route('update-campaign',$campaign->id)}}" enctype="multipart/form-data">@csrf
                        <div class="my_dashboard_review">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb30">Campaign Details</h4>
                                    <div class="my_profile_setting_input form-group">
                                        <label for="listingPlace">Title*</label>
                                        <input value="{{$campaign->title}}" type="text" name="title" class="form-control" id="listingPlace" placeholder="Campaign Title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_textarea">
                                        <label for="propertyDescription">Description*</label>
                                        <textarea name="description" class="form-control" id="propertyDescription" rows="7" required>{{$campaign->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_textarea">
                                        <label for="propertyDescription">Objective*</label>
                                        <textarea name="objective" class="form-control" id="propertyDescription" rows="7" required>{{$campaign->objective}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_dashboard_review mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb30">Campaign Vitals</h4>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="selectpicker" data-live-search="true" data-width="100%" required>
                                            <option data-tokens="">Select Campaign Category</option>
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}" data-tokens="">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Campaign Type*</label>
                                        <select name="type" class="selectpicker" data-live-search="true" data-width="100%" required>
                                            <option data-tokens="">Select Type</option>
                                            <option value="Email" data-tokens="">E-mail</option>
                                            <option value="Text Message" data-tokens="">Text Message</option>
                                            <option value="Phone Call" data-tokens="">Phone Call</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Campaign Target*</label>
                                        <select name="target_category_id" class="form-control" data-live-search="true" data-width="100%" required>
                                            <option value="" data-tokens="">Select Campaign Target</option>
                                            @foreach($target_categories as $tc)
                                                <option value="{{$tc->id}}" data-tokens="">{{$tc->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="zipCode">Campaign Goal</label>
                                        <input type="text" value="{{$campaign->goal}}" name="goal" class="form-control" id="zipCode" placeholder="25000" required>
                                    </div>
                                    @error('goal')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_textarea">
                                        <label for="propertyDescription">Message*</label>
                                        <textarea name="message" class="form-control" id="propertyDescription" rows="7" required>{{$campaign->message}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_dashboard_review mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb30">Media</h4>
                                </div>
                                <div class="col-lg-12">
                                    <h5>Featured image</h5>
                                    <div class="upload_file_input_add_remove">
                                        <span class="btn_upload"><input name="image" type="file" id="imag" title="" class="input-img"/><span class="flaticon-upload"></span></span>
                                        <img id="ImgPreview" src="{{asset('guido/images/resource/upload-img.png')}}" class="preview1" alt="" />
                                        <button id="removeImage1" class="btn-rmv1" type="button"><span class="flaticon-delete"></span></button>
                                    </div>
                                    <small>Dimensions: Height 400px by Width 120px.</small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-thm listing_save_btn mt30" href="#">Update Campaign</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
