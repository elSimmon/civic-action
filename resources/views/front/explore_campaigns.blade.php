@extends('layouts.main')

@section('content')
    <!-- 6th Home Design -->
    <section class="listing-home-bg parallax pt30-520" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row posr">
                <div class="col-lg-12">
                    <div class="paralax_home_search_content mt50 mt0-767">
                        <div class="home-text text-center">
                            <h2 class="fz50">Explore All Listed Campaigns</h2>
                            <p class="fz18 color-white">You can participate in any campaign of your concern. campaign participation is based on state and local government.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="home_adv_srch_opt text-center mt0-767">
                                    <div class="wrapper">
                                        <div class="home_adv_srch_form">
                                            <form class="bgc-white bgct-767 pl30 pt10 pl0-767">
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto home_form_input mb20-xsd">
                                                        <label class="sr-only">Username</label>
                                                        <div class="input-group style1 mb-2 mb0-767">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text pl0 pb0-767">What</div>
                                                            </div>
                                                            @php
                                                                $categories = \App\Models\Category::all();
                                                                $states = \App\Models\State::all();
                                                            @endphp
                                                            <div class="select-wrap style1-dropdown">
                                                                <select name="lang" class="form-control js-searchBox">
                                                                    <option value="">Ex: Agriculture, Banking...</option>
                                                                    @foreach($categories as $cat)
                                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto home_form_input">
                                                        <label class="sr-only">Username</label>
                                                        <div class="input-group style2 mb-2 mb0-767">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text pb0-767">Where</div>
                                                            </div>
                                                            <div class="select-wrap style2-dropdown">
                                                                <select name="lang" class="form-control js-searchBox2">
                                                                    <option value="">Your City</option>
                                                                    @foreach($states as $st)
                                                                        <option value="{{$st->id}}">{{$st->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto home_form_input2">
                                                        <button type="submit" class="btn search-btn mb-2"><span class="flaticon-loupe"></span></button>
                                                    </div>
                                                </div>
                                            </form>
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

    <!-- Listing Grid View -->
    <section class="our-listing pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                <div class="col-lg-12">
                    <div class="mbp_pagination mt10">
                        <div class="new_line_pagination text-center">
{{--                            {{$campaigns->paginate()}}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
