@extends('layouts.main')

@section('content')
    <section class="our-dashbord dashbord bgc-f4 ovh">
        <div class="container mt80">
            <div class="row">
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2 mb25">
                        <h2 class="breadcrumb_title">Upload Your Targets Here...</h2>
                        <p>You can upload multiple targets at the same time by clicking add entry button</p>
                        <p>Uploaded targets will appear in the new campaign form after a minimum of 24hrs.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <form method="POST" enctype="multipart/form-data" action="{{route('store-targets')}}">@csrf
                        <div id="show_item">
                            <div class="my_dashboard_review mt30">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Target Entry</h4>
                                        <button class="btn-success pull-right btn-sm add_more_btn">+Add More</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="twlink">Picture</label>
                                            <input type="file" name="image[]" class="form-control" id="twlink" required/>
                                        </div>
                                        <small>Height:400px - Width:120px.</small>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="twlink">Full Name</label>
                                            <input type="text" name="fullname[]" class="form-control" id="twlink" placeholder="Jerimbo Limo">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="inslink">State</label>
                                            <select name="state_id[]" class="form-control" data-live-search="true" data-width="100%">
                                                <option value="" data-tokens="">Select State</option>
                                                @foreach($states as $st)
                                                <option value="{{$st->id}}" data-tokens="">{{$st->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="googlelink">Constituency</label>
                                            <input type="text" name="constituency[]" class="form-control" id="googlelink" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="inslink">Designation</label>
                                            <input type="text" name="designation[]" class="form-control" id="inslink" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="googlelink">Phone Number</label>
                                            <input type="text" name="phone_number[]" class="form-control" id="googlelink" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="googlelink">E-Mails</label>
                                            <input type="email" name="email[]" class="form-control" id="googlelink" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-thm listing_save_btn mt30" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
