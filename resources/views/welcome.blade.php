<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('partials.head')
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    @include('partials.main_header_nav')


    <!-- Main Header Nav For Mobile -->
    @include('partials.mobile_header_nav')

    <!-- Search Field Modal -->
    <!-- Home Design -->
    <section class="home-one home1-overlay bg-img1">
        <div class="container">
            <div class="row posr">
                <div class="col-lg-12">
                    <div class="home_content home1">
                        <div class="home-text text-center">
                            <h2 class="fz50">Public Campaigns and Complaints</h2>
                            <p class="fz18 color-white">Have a say, participate in the political and socio-economic affairs of your constituency and government.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="home_adv_srch_opt text-center">
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
                                                            <div class="select-wrap style1-dropdown">
                                                                <select name="lang" class="form-control js-searchBox">
                                                                    <option value="">Ex: education, governance</option>
                                                                    <option value="TopPicks">Top Picks</option>
                                                                    <option value="CityOfLondon">Lagos</option>
                                                                    <option value="OutdoorActivities">Abuja</option>
                                                                    <option value="Restaurant">Enugu</option>
                                                                    <option value="Hotels">Kano</option>
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
                                                                    <option value="NewYork">Lagos</option>
                                                                    <option value="London">Abuja</option>
                                                                    <option value="Paris">Kano</option>
                                                                    <option value="Istanbul">PHC</option>
                                                                    <option value="LosAngeles">Edo</option>
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
                                    <div class="home_mobile_slider home_custom_list dn db-767">
                                        <div class="item">
                                            <div class="icon_home1">
                                                <div class="icon"><span class="flaticon-cutlery"></span></div>
                                                <p>Politics</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon_home1">
                                                <div class="icon"><span class="flaticon-shopping-bag"></span></div>
                                                <p>Education</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon_home1">
                                                <div class="icon"><span class="flaticon-tent"></span></div>
                                                <p>Security</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon_home1">
                                                <div class="icon"><span class="flaticon-desk-bell"></span></div>
                                                <p>Economy</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon_home1">
                                                <div class="icon"><span class="flaticon-mirror"></span></div>
                                                <p>Religion</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon_home1">
                                                <div class="icon"><span class="flaticon-brake"></span></div>
                                                <p>Sports</p>
                                            </div>
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

    <!-- Feature Properties -->
    <section id="feature-property" class="feature-property pt0 border-bottom">
        <div class="container p0">
            <div class="feature-content dn-767">
                <div class="row justify-content-center mt-80 mb45">
                    <div class="col-lg-4 text-center">
                        <p><em class="text-white">What are you interested in?</em></p>
                    </div>
                </div>
                @php
                $cats = \App\Models\Category::all();
                @endphp
                <div class="row">
                    @foreach($cats as $cat)
                    <div class="col-sm-6 col-md-4 col-xl-2">
                        <a href="{{route('category',[$cat->name])}}">
                            <div class="icon-box text-center">
                                <div class="icon"><span class="flaticon-tent"></span></div>
                                <div class="content-details">
                                    <div class="title">{{$cat->name}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container pt100-767">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>The Most Recent Campaign Listings</h2>
                        <p>Discover some of the most recent campaigns Listed in Nigeria based on user participation and remarks.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="popular_listing_slider1">
                        @foreach($campaigns as $cmp)
                            <div class="item">
                                <div class="feat_property">
                                    <div class="thumb">
                                        <img class="img-whp" height="400px" width="120px" src="{{asset('targets/'.$cmp->target->image)}}" alt="Campain Target">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="{{route('campaign-details',[$cmp->id])}}">Verified</a></li>
                                        </ul>
                                        <ul class="tag2 mb0">
                                            <li class="list-inline-item"><a href="{{route('campaign-details',[$cmp->id])}}">Participate</a></li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="{{route('campaign-details',[$cmp->id])}}"><img class="" height="50px" width="50px" src="{{asset('logos/'.$cmp->organization->logo)}}" alt="Organization Logo"></a></div>
                                        <h4>{{$cmp->title}}</h4>
                                        <p>{{$cmp->organization->name}}</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span>
                                                {{$cmp->target->phone_number}}</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span>
                                                {{$cmp->state->name}}</a></li>
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
            </div>
        </div>
    </section>

    <!-- Property Cities -->
    <section id="property-city" class="property-city pb70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Trending Campaign Cities</h2>
                        <p>Cities in Nigeria with highest campaign records</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-8 col-xl-8">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="{{asset('img/lasgidi.jpg')}}" alt="pc2.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Lagos</h4>
                                <p>62 Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="{{asset('img/kano.jpg')}}" alt="Kano Picture"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Kano</h4>
                                <p>45 Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="{{asset('img/ph_city.png')}}" alt="pc4.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Port Harcourt</h4>
                                <p>86 Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 col-xl-8">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="{{asset('img/abuja.jpeg')}}" alt="pc3.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>FCT - Abuja</h4>
                                <p>21 Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="why-chose" class="whychose_us bgc-f7 pb70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>How it Works</h2>
                        <p>Bringing Leaders, Law makers, organizations and the public masses together.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-find-location"></span>
                        </div>
                        <div class="details">
                            <h4>Create a Profile</h4>
                            <p>To launch a new campaign/complain, first create an organizational profile. All profiles are subject to review.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-comment"></span>
                        </div>
                        <div class="details">
                            <h4>Create a Campaign</h4>
                            <p>Start a new campaign by adding your campaign details and set the desired number of participants.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-date"></span>
                        </div>
                        <div class="details">
                            <h4>Participate</h4>
                            <p>Participate in any listed campaign of your concern by sending direct messages, calls and remarks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Divider -->
    <section class="divider home-style1 parallax" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="business_exposer text-center">
                        <h2 class="title text-white mb20">Get Your Voice Heard</h2>
                        <p class="text-white mb35">Political Participation does not only stop at the polling units, Engage your leaders and representatives to take on the initiatives and get the job done effectively.</p>
                        <a class="btn exposer_btn" href="#">How It Works</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Partners -->
    <section class="start-partners home1 bgc-thm pt60 pb60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="start_partner tac-smd">
                        <h2>Get your voice heard today!</h2>
                        <p>Start a new campaign today and let your voice and opinion be heard and supported by others.</p>
                    </div>
                </div>
                <div class="col-lg-4 pr10">
                    <div class="parner_reg_btn text-right tac-smd">
                        <a class="btn" href="#">Create Campaign</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer -->
    @include('partials.footer')

{{--    scroll to top arrow--}}
    <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
@include('partials.scripts')
</body>

</html>
