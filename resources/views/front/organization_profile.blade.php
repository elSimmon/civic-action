@extends('layouts.main')

@section('content')
    @include('front.partials.dashboard_nav')


    <section class="our-dashbord dashbord bgc-f4">
        <div class="container">
            <div class="row">
                @include('front.partials.dashboard_mobile_nav')
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2">
                        <h2 class="breadcrumb_title float-left">Profile</h2>
                        <p class="float-right">Ready to jump back in!</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="my_dashboard_profile mb30-lg">
                                <h4 class="mb30">Profile Details</h4>
                                <div class="row">
                                    <form method="POST" action="{{route('update-organization')}}" enctype="multipart/form-data">@csrf
                                            <div class="col-lg-12">
                                                <div class="wrap-custom-file mb50">
                                                    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                                                    <label for="image1" style="background-image: url({{asset('logos/'.$org->logo)}}); border-radius: 50%;
                                                        bottom: 0;
                                                        cursor: pointer;
                                                        height: 120px;
                                                        left: 0;
                                                        position: absolute;
                                                        background-position: center;
                                                        background-repeat: no-repeat;
                                                        background-size: cover;
                                                        right: 0;
                                                        top: 0;
                                                        width: 120px;
                                                        z-index: 1;
                                                        -webkit-transition: -webkit-transform 0.4s;
                                                        transition: -webkit-transform 0.4s;
                                                        transition: transform 0.4s;
                                                        transition: transform 0.4s, -webkit-transform 0.4s;">
                                                        <span>Upload Photo</span>
                                                        <small class="file_title">Maximum file size: 2 MB.</small>
                                                    </label>
                                                    <a class="text-thm tdu photo_delete" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="my_profile_setting_input form-group mt100-500">
                                                    <label for="formGroupExampleInput1">Organization Name</label>
                                                    <input type="text" name="name" value="{{$org->name}}" class="form-control" id="formGroupExampleInput1" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="my_profile_setting_input form-group">
                                                    <label for="formGroupExampleInput8">Phone</label>
                                                    <input type="text" name="phone" value="{{$org->phone}}" class="form-control" id="formGroupExampleInput8">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="my_profile_setting_input form-group">
                                                    <label for="formGroupExampleEmail">Email</label>
                                                    <input type="email" name="email" value="{{$org->email}}" class="form-control" id="formGroupExampleEmail">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_profile_setting_textarea">
                                                    <label for="exampleFormControlTextarea1">Address</label>
                                                    <textarea class="form-control" name="address" value="" id="exampleFormControlTextarea1" rows="6">{{$org->address}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_profile_setting_textarea">
                                                    <label for="exampleFormControlTextarea1">About Organization</label>
                                                    <textarea class="form-control" name="about"  id="exampleFormControlTextarea1" rows="6">{{$org->about}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="my_profile_setting_input form-group">
                                                    <label for="formGroupExampleInput5">Website</label>
                                                    <input type="text" name="website" value="{{$org->website}}" class="form-control" id="formGroupExampleInput5">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_profile_setting_input">
                                                    <button type="submit" class="btn update_btn">Save Changes</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="my_dashboard_profile">
                                <h4 class="mb20">Change password</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleOldPass">Current Password</label>
                                            <input type="text" class="form-control" id="formGroupExampleOldPass">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleNewPass">New Password</label>
                                            <input type="text" class="form-control" id="formGroupExampleNewPass">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleConfPass">Confirm New Password</label>
                                            <input type="text" class="form-control" id="formGroupExampleConfPass">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="my_profile_setting_input">
                                            <button class="btn update_btn style2">Change Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
