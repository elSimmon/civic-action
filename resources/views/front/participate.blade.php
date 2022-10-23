@extends('layouts.main')

@section('content')
    <!-- Listing Grid View -->
    <section class="our-listing pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_content style2 mb0-991">
                        <h2 class="breadcrumb_title text-success">Participate</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Campaign</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Participation form</li>
                        </ol>
                        <h4>Campaign Message:</h4>
                        <p>{{$campaign->message}}</p>
                        <h4>Campaign type: {{$campaign->type}}</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="dn db-lg mt30 mb0 tac-767">
                        <div id="main2">
                            <span id="open2" class="fa fa-filter filter_open_btn style2"> Show Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="sidebar_listing_grid1 dn-lg bgc-f4">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <div class="wrapper">
                                    <h4>Participation Form</h4>
                                    <p class="text-success">Please fill this form to participate in the campaign</p>
                                    <div class="custom_reivews row mt40 mb30">

                                    </div>
                                    <form class="review_form" method="POST" action="{{route('participate')}}">@csrf
                                        <input type="hidden" name="campaign_id" value="{{$campaign->id}}">
                                        <input type="hidden" name="organization_id" value="{{$campaign->organization->id}}">
                                        <input type="hidden" name="state_id" value="{{$state->id}}">
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
                                            <select id="sel_lga1" class="form-control" name="lga_id" required>
                                                <option value="">Select Your LGA</option>
                                                @foreach($lgas as $lg)
                                                    <option value="{{$lg->id}}">{{$lg->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit &amp; Participate</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="listing_filter_row dif db-767">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                                <div class="left_area tac-xsd mb30-767">
                                    <p class="mb0">Showing <span class="heading-color">{{$campaign->target_category->name}} from {{$state->name}} State</span></p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                                <div class="listing_list_style tac-767">
                                    <ul class="mb0">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($targets as $tg)
                            <div class="col-lg-12">
                            <div class="feat_property list">
                                <div class="thumb">
                                    <img class="img-whp" height="300px" width="120px" src="{{asset('targets/'.$tg->image)}}" alt="target image">
                                    <div class="thmb_cntnt">
                                        <ul class="tag2 mb0">
                                            <li class="list-inline-item"><a href="#"> Target</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <h4>{{$tg->fullname}}</h4>
                                        <p><img class="list_simg rounded-circle mr5" src="{{asset('guido/images/icons/agent1.svg')}}" alt="agent1.svg">
                                            {{$tg->constituency}}</p>
                                        <ul class="prop_details mb0 mt15">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span>
                                                {{$tg->phone_number}}</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="fa fa-envelope-o pr5"></span>
                                                {{$tg->email}}</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> {{$tg->state->name}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="{{asset('guido/images/icons/icon3.svg')}}" alt="icon3.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">{{$tg->designation}}</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
