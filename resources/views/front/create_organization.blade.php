@extends('layouts.main')

@section('content')
    <section class="our-dashbord dashbord bgc-f4 ovh">
        <div class="container mt80">
            <div class="row">
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2 mb25">
                        <h2 class="breadcrumb_title">Your Organization Details</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <form method="POST" action="{{route('create-organization')}}" enctype="multipart/form-data">@csrf
                    <div class="my_dashboard_review">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="mb30">General</h4>
                                <div class="my_profile_setting_input form-group">
                                    <label for="listingPlace">Organization Name*</label>
                                    <input type="text" name="name" class="form-control" id="listingPlace" placeholder="Whats the name of your organization?" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_profile_setting_textarea">
                                    <label for="propertyDescription">Address*</label>
                                    <textarea name="address" class="form-control" id="propertyDescription" rows="7" required>Your Organization's address.</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_profile_setting_textarea">
                                    <label for="propertyDescription">About*</label>
                                    <textarea name="about" class="form-control" id="propertyDescription" rows="7" required>About Your organization</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my_dashboard_review mt30">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="mb30">Contact Information</h4>
                                <div class="my_profile_setting_input ui_kit_select_search form-group">
                                    <label>Email*</label>
                                    <input type="email" name="email" class="form-control" id="emailId" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_profile_setting_input form-group">
                                    <label for="phoneNumber">Phone number*</label>
                                    <input type="text" name="phone" class="form-control" id="phoneNumber" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_profile_setting_input form-group">
                                    <label for="website">Website (optional)</label>
                                    <input name="website" type="text" class="form-control" id="website" placeholder="Website Url">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my_dashboard_review mt30">
                        <div class="row">
                            <div class="col-lg-12 mt50">
                                <h5 class="mb20">Logo (required)</h5>
                                <ul class="mb0">
                                    <li class="list-inline-item vat mb30-767">
                                        <div class="upload_file_input_add_remove">
                                            <span class="btn_upload"><input name="logo" type="file" id="imag2" title="Select a logo image of square dimensions" class="input-img" required/><span class="flaticon-upload"></span></span>
                                            <img id="ImgPreview2" src="{{asset('guido/images/resource/upload-img.png')}}" class="preview2" alt="" />
                                            <button id="removeImage2" class="btn-rmv2" type="button"><span class="flaticon-delete"></span></button>
                                        </div>
                                        <small>Maximum file size: 2mb.</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-thm listing_save_btn mt30" href="#">Save &amp; Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
