@extends('layouts.main')

@section('content')
    <!-- Listing Single Property -->
    <section class="listing-title-area pb50">
        <div class="container">
            <div class="row mb30 mt-20">
                <div class="col-xl-7">
                    <div class="single_property_title mt30-767">
                        <div class="media">
                            <img class="mr-3" height="100px" width="100px" src="{{asset('logos/'.$campaign->organization->logo)}}" alt="Logo">
                            <div class="media-body mt20">
                                <h2 class="mt-0">{{$campaign->organization->name}}</h2>
                                <ul class="mb0 agency_profile_contact">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-phone"></span> {{$campaign->organization->phone}}</a></li>
                                    <li class="list-inline-item"><a href="#"><span class="fa fa-clock-o"></span>Registered: {{\Carbon\Carbon::parse($campaign->organization->created_at)->diffForHumans()}}</a></li>
                                    <li class="list-inline-item"><span class="fa fa-envelope-o"></span>Email: {{$campaign->organization->email}} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="single_property_social_share">
                        <div class="price mt25 float-right fn-lg">
                            <a href="{{route('explore')}}" class="btn btn-thm spr_btn"><span class="fa fa-arrow-circle-left"></span> Back to Campaigns</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
                            <div class="listing_single_description mb60">
                                <h2 class="mb30">{{$campaign->title}}</h2>
                                <h4 class="mt20 mb10">Objective</h4>
                                <p class="first-para mb25">{{$campaign->objective}}</p>
                                <p class="gpara second_para white_goverlay mt10 mb20">{{$campaign->description}}</p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <h4 class="mt20 mb10">Description</h4>
                                        <p class="mt10 mb10">{{$campaign->description}}</p>

                                        <h4 class="mt20 mb10">Message</h4>
                                        <p class="mt10 mb10 text-white bg-success">{{$campaign->message}}</p>
                                    </div>
                                </div>
                                <p class="overlay_close">
                                    <a class="text-thm fz15 tdu" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Show / Hide</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 pr5 pr15-767">
                            <h4 class="mb30">Target: {{$campaign->target_category->name}}</h4>
                            <div class="spls_style_two mb10">
                                <a class="popup-img" href="#"><img class="img-fluid w100" src="{{asset('campaign_images/'.$campaign->image)}}" alt="Campaign Photo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agent Single Grid View -->
    <section class="our-agent-single pt0 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="additional_details mb30">
                                <div class="row">
                                    <div class="col-lg-12 pl0 pr0 pl15-767">
                                        <h4 class="mb30">Campaign Vitals</h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                        <div class="listing_feature_iconbox mb30">
                                            <div class="icon float-left mr10"><span class="flaticon-wifi"></span></div>
                                            <div class="details">
                                                <div class="title">Category: {{$campaign->category->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                        <div class="listing_feature_iconbox mb30">
                                            <div class="icon float-left mr10"><span class="fa fa-envelope"></span></div>
                                            <div class="details">
                                                <div class="title">Type: {{$campaign->type}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                        <div class="listing_feature_iconbox mb30">
                                            <div class="icon float-left mr10"><span class="fa fa-clock-o"></span></div>
                                            <div class="details">
                                                <div class="title">{{\Carbon\Carbon::parse($campaign->created_at)->diffForHumans()}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                        <div class="listing_feature_iconbox mb30">
                                            <div class="icon float-left mr10"><span class="fa fa-sort-numeric-desc"></span></div>
                                            <div class="details">
                                                <div class="title">Goal: {{number_format($campaign->goal)}} Participants</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl0 pl15-767">
                            <div class="single_page_review_form p30-lg mb30-991">
                                <div class="wrapper">
                                    <form class="review_form" method="POST" action="{{route('show-participate')}}">@csrf
                                        <input type="hidden" name="campaign_id" value="{{$campaign->id}}">
                                        <input type="hidden" name="target_category_id" value="{{$campaign->target_category_id}}">
                                        <div class="form-group">
                                            <select id="sel_state1" name="state_id" class="form-control" required>
                                                <option value="">Select Your State</option>
                                                @foreach($states as $state)
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-success">Continue <span class="fa fa-arrow-circle-right"></span> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="listing_single_sidebar">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
