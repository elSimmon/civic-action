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
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-pin"></span> {{$campaign->state->name}}</a></li>
                                    <li class="list-inline-item">Gaol: {{number_format($campaign->goal)}} Participants</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="single_property_social_share">
                        <div class="price mt25 float-right fn-lg">
                            <a href="{{route('campaign-details',[$campaign->id])}}" class="btn btn-thm spr_btn"><span class="fa fa-arrow-circle-left"></span> Back</a>
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
                                <h4 class="mt20 mb10">Message</h4>
                                <p class="first-para mb25 text-success">{{$campaign->message}}</p>
                                <h4 class="text-danger">Before filling and Submitting the form:</h4>
                                @switch($campaign->type)
                                    @case('Email')
                                        <h4 class="text-success">Send an Email with the above message to {{$campaign->target->email}}</h4>
                                    @break
                                    @case('Phone Call')
                                        <h4 class="text-success">Place a Phone Call with the above message to {{$campaign->target->phone}}</h4>
                                    @break
                                    @default
                                        <h4 class="text-success">Sent a Text Message with the above message to {{$campaign->target->phone}}</h4>
                                @endswitch
                            </div>
                        </div>
                        <div class="col-lg-12 pl0 pl15-767">
                            <div class="single_page_review_form p30-lg mb30-991">
                                <div class="wrapper">
                                    <h4>Participation Form</h4>
                                    <p class="text-success">Please fill this form to participate in the campaign</p>
                                    <div class="custom_reivews row mt40 mb30">

                                    </div>
                                    <form class="review_form" method="POST" action="{{route('participate')}}">@csrf
                                        <input type="hidden" name="campaign_id" value="{{$campaign->id}}">
                                        <input type="hidden" name="organization_id" value="{{$campaign->organization->id}}">
                                        <div class="form-group text-success">
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                        </div>
                                        @error('name')
                                        <p class="text-sm text-danger mb10">{{$message}}</p>
                                        @enderror

                                        <div class="form-group text-success">
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone number">
                                        </div>
                                        @error('phone')
                                        <p class="text-sm text-danger mb10">{{$message}}</p>
                                        @enderror

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                        </div>
                                        @error('email')
                                        <p class="text-sm text-danger mb10">{{$message}}</p>
                                        @enderror

                                        <div class="form-group">
                                            <select id="sel_state1" name="state_id" class="form-control" required>
                                                <option value="">Select Your State</option>
                                                @foreach($states as $state)
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select id="sel_lga1" class="form-control" name="lga_id" required>
                                                <option value="">Select Your LGA</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit &amp; Participate</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 pr5 pr15-767">
                            <h4 class="mb30">Target: {{$campaign->target->fullname}} / {{$campaign->target->designation}}</h4>
                            <div class="spls_style_two mb10">
                                <a class="popup-img" href="#"><img class="img-fluid w100" src="{{asset('targets/'.$campaign->target->image)}}" alt="Target Photo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agent Single Grid View -->
@endsection
