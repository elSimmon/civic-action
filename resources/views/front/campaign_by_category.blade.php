@extends('layouts.main')
@section('title', 'Campaign by Category')

@section('content')
    <!-- 6th Home Design -->
    <section class="listing-home-bg parallax pt30-520" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row posr">
                <div class="col-lg-12">
                    <div class="paralax_home_search_content mt50 mt0-767">
                        <div class="home-text text-center">
                            <h2 class="fz50"> All Listed Campaigns in <span class="text-success text-bold"> {{$name}}</span> Category</h2>
                            <p class="fz18 color-white">You can participate in any campaign of your concern. campaign participation is based on state and local government.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <center><a class="btn btn-lg btn-outline-success" href="{{route('welcome')}}"><span class="fa fa-arrow-circle-left"></span> Back Home</a> </center>
                </div>

            </div>
        </div>
    </section>

    <!-- Listing Grid View -->
    <section class="our-listing pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--                    <center><a class="btn btn-lg btn-outline-success" href="{{route('welcome')}}"><span class="fa fa-arrow-circle-left"></span> Back Home</a> </center>--}}
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                    </div>
                    <div class="row">
                        @foreach($campaigns as $cmp)
                            <div class="col-md-6 col-lg-4">
                                <div class="feat_property">
                                    <div class="thumb">
                                        <img class="img-whp" height="400px" width="120px" src="{{asset('campaign_images/'.$cmp->image)}}" alt="Campaign Photo">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#"><span class="fa fa-check"></span></a></li>
                                                <li class="list-inline-item"><a href="{{route('campaign-details',[$cmp->id])}}">Verified</a></li>
                                            </ul>
                                            <ul class="tag2 mb0">
                                                <li class="list-inline-item"><a href="{{route('campaign-details',[$cmp->id])}}">Participate</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <div class="badge_icon"><a href="{{route('campaign-details',[$cmp->id])}}"><img height="50px" width="50px" src="{{asset('logos/'.$cmp->organization->logo)}}" alt="Organization Logo"></a></div>
                                            <h4>{{$cmp->title}}</h4>
                                            <p>{{$cmp->organization->name}}</p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> {{$cmp->organization->phone}}</a></li>
                                                <li class="list-inline-item"><a href="#"><span class="fa fa-envelope-o pr5"></span> {{$cmp->organization->email}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img src="{{asset('guido/images/icons/icon3.svg')}}" alt="icon3.svg"></a></li>
                                                <li class="list-inline-item"><a href="#">{{$cmp->category->name}}</a></li>
                                            </ul>
                                            <ul class="fp_meta float-right mb0">
                                                <li class="list-inline-item"><a class="icon" href="#"><span class="fa fa-eye text-success">&nbsp;{{number_format($cmp->views->count())}}</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </section>
@endsection
