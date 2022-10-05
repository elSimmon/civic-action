@extends('layouts.main')

@section('content')
    <!-- 6th Home Design -->
    <section class="listing-home-bg parallax pt30-520" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row posr">
                <div class="col-lg-12">
                    <div class="paralax_home_search_content mt50 mt0-767">
                        <div class="home-text text-center">
                            <h2 class="fz50">Explore Amazing Destinations</h2>
                            <p class="fz18 color-white">Find great places to stay, eat, shop, or visit from local experts.</p>
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
                                                            <div class="select-wrap style1-dropdown">
                                                                <select name="lang" class="form-control js-searchBox">
                                                                    <option value="">Ex: shopping, restaurant...</option>
                                                                    <option value="TopPicks">Top Picks</option>
                                                                    <option value="CityOfLondon">City of London</option>
                                                                    <option value="OutdoorActivities">Outdoor Activities</option>
                                                                    <option value="Restaurant">Restaurant</option>
                                                                    <option value="Hotels">Hotels</option>
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
                                                                    <option value="NewYork">New York</option>
                                                                    <option value="London">London</option>
                                                                    <option value="Paris">Paris</option>
                                                                    <option value="Istanbul">Istanbul</option>
                                                                    <option value="LosAngeles">Los Angeles</option>
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
                    <div class="listing_sidebar dn db-lg">
                        <div class="sidebar_content_details style3">
                            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                            <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                                <div class="sidebar_advanced_search_widget">
                                    <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                                    <ul class="sasw_list style2 mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="What are you looking for">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="sidebar_select_options">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option value="">All Categories</option>
                                                        <option value="Automotive">Automotive</option>
                                                        <option value="Beautu&Spa">Beautu & Spa</option>
                                                        <option value="Hotels">Hotels</option>
                                                        <option value="Istanbul">Outdoor Activities</option>
                                                        <option value="Restaurant">Restaurant</option>
                                                        <option value="Shopping">Shopping</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="sidebar_select_options">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option value="Location">Location</option>
                                                        <option value="NewYork">New York</option>
                                                        <option value="London">London</option>
                                                        <option value="Paris">Paris</option>
                                                        <option value="Istanbul">Istanbul</option>
                                                        <option value="LogAngeles">Log Angeles</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar_range_slider mb30 mt70">
                                                <input class="range-example-km mb20" value="50" type="text">
                                                <P class="mt20">Radius around selected destination</P>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small_dropdown2">
                                                <div id="prncgs2" class="btn dd_btn">
                                                    <span>Price</span>
                                                    <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                                </div>
                                                <div class="dd_content2">
                                                    <div class="pricing_acontent">
                                                        <input class="mt30" data-addui='slider' data-min='0' data-max='1000' data-formatter='usd' data-fontsize='14' data-step='0.05' data-range='true' value='150,692'>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ui_kit_checkbox sidebar_tag">
                                                <h4 class="title">Tags</h4>
                                                <div class="wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckCredit3">
                                                                <label class="custom-control-label" for="customCheckCredit3">Accepts Credit Cards</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckSmoking3">
                                                                <label class="custom-control-label" for="customCheckSmoking3">Smoking Allowed</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckBikeP3">
                                                                <label class="custom-control-label" for="customCheckBikeP3">Bike Parking</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckStreet3">
                                                                <label class="custom-control-label" for="customCheckStreet3">Street Parking</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckWireless3">
                                                                <label class="custom-control-label" for="customCheckWireless3">Wireless Internet</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckAlco3">
                                                                <label class="custom-control-label" for="customCheckAlco3">Alcohol</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckPet3">
                                                                <label class="custom-control-label" for="customCheckPet3">Pet Friendly</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckCredit4">
                                                                <label class="custom-control-label" for="customCheckCredit4">Accepts Credit Cards</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckSmoking4">
                                                                <label class="custom-control-label" for="customCheckSmoking4">Smoking Allowed</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckBikeP4">
                                                                <label class="custom-control-label" for="customCheckBikeP4">Bike Parking</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckStreet4">
                                                                <label class="custom-control-label" for="customCheckStreet4">Street Parking</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckWireless4">
                                                                <label class="custom-control-label" for="customCheckWireless4">Wireless Internet</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckAlco4">
                                                                <label class="custom-control-label" for="customCheckAlco4">Alcohol</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckPet4">
                                                                <label class="custom-control-label" for="customCheckPet4">Pet Friendly</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button text-center mt25">
                                                <button type="submit" class="btn btn-block btn-thm mb15">Search</button>
                                                <a class="tdu fz14" href="#">Reset Filter</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dn db-lg mt30 mb0 tac-767">
                        <div id="main2">
                            <span id="open2" class="fa fa-filter filter_open_btn style2"> Show Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="listing_filter_row dif db-767">
                            <div class="col-md-6 col-lg-7">
                                <div class="left_area tac-xsd mb30-767">
                                    <div class="price_ranger_dropdown mb30-991">
                                        <ul class="mb0 mt10">
                                            <li class="list-inline-item mb30-991">
                                                <select class="selectpicker show-tick">
                                                    <option>Categories</option>
                                                    <option>Automotive</option>
                                                    <option>Beautu & Spa</option>
                                                    <option>Hotels</option>
                                                    <option>Outdoor Activities</option>
                                                    <option>Restaurant</option>
                                                    <option>Shopping</option>
                                                </select>
                                            </li>
                                            <li class="list-inline-item mb30-991">
                                                <div class="listing_price_tag">
                                                    <div class="tag_btn mega_tags_dropdown">Tags <span class="fa fa-angle-down"></span></div>
                                                    <div class="tag_dropdown_content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <ul class="ui_kit_checkbox selectable-list tal-767">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                            <label class="custom-control-label mb0" for="customCheck1">Accepts Credit Cards</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                            <label class="custom-control-label mb0" for="customCheck2">Smoking Allowed</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                            <label class="custom-control-label mb0" for="customCheck3">Bike Parking</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                            <label class="custom-control-label mb0" for="customCheck4">Street Parking</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <ul class="ui_kit_checkbox selectable-list tal-767">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                            <label class="custom-control-label mb0" for="customCheck5">Wireless Internet</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                            <label class="custom-control-label mb0" for="customCheck6">Alcohol</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                            <label class="custom-control-label mb0" for="customCheck7">Pet Friendly</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <select class="selectpicker show-tick">
                                                    <option>Price Range</option>
                                                    <option>Free</option>
                                                    <option>Low: $</option>
                                                    <option>Medium: $$</option>
                                                    <option>High: $$$</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="listing_list_style tac-767">
                                    <ul class="mb0">
                                        <li class="list-inline-item dropdown text-left"><span class="stts">Short by: </span>
                                            <select class="selectpicker">
                                                <option>Default</option>
                                                <option>Newest</option>
                                                <option>Featured</option>
                                                <option>Most Views</option>
                                            </select>
                                        </li>
                                        <li class="list-inline-item gird"><a class="text-thm" href="#"><span class="fa fa-th-large"></span></a></li>
                                        <li class="list-inline-item list"><a href="#"><span class="fa fa-th-list"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg1.jpg" alt="lg1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="tag2 mb0">
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent1.svg" alt="agent1.svg"></a></div>
                                        <h4>Adventure High Ropes</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon3.svg" alt="icon3.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Outdoor Activities</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg2.jpg" alt="lg2.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent4.svg" alt="agent4.svg"></a></div>
                                        <h4>Museum of New York</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon8.svg" alt="icon8.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Shopping</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg3.jpg" alt="lg3.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent5.svg" alt="agent5.svg"></a></div>
                                        <h4>The Palmas Hotel</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon5.svg" alt="icon5.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Hotels</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg4.jpg" alt="lg4.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent6.svg" alt="agent6.svg"></a></div>
                                        <h4>Core by Clare Smyth</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon4.svg" alt="icon4.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Restaurant</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg5.jpg" alt="lg5.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent2.svg" alt="agent2.svg"></a></div>
                                        <h4>Wellness Fitness Club</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon6.svg" alt="icon6.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Fitness</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg6.jpg" alt="lg6.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent7.svg" alt="agent7.svg"></a></div>
                                        <h4>Luxary Hotel-Spa</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon7.svg" alt="icon7.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Beauty & Spa</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg7.jpg" alt="lg7.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent6.svg" alt="agent6.svg"></a></div>
                                        <h4>The Ledbbury</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon4.svg" alt="icon4.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Restaurant</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg8.jpg" alt="lg8.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent2.svg" alt="agent2.svg"></a></div>
                                        <h4>The Waldrof Hilton</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon5.svg" alt="icon5.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Fitness</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="images/listing/lg9.jpg" alt="lg9.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">$$$$</a></li>
                                            <li class="list-inline-item"><a href="#">Open</a></li>
                                        </ul>
                                        <ul class="listing_reviews">
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
                                            <li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="badge_icon"><a href="#"><img src="images/icons/agent7.svg" alt="agent7.svg"></a></div>
                                        <h4>Burger & Lobster Soho</h4>
                                        <p>But I must explain to you how all this mistaken idea...</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/icons/icon4.svg" alt="icon4.svg"></a></li>
                                            <li class="list-inline-item"><a href="#">Beauty & Spa</a></li>
                                        </ul>
                                        <ul class="fp_meta float-right mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mbp_pagination mt10">
                        <div class="new_line_pagination text-center">
                            <p>Showing 36 of 497 Results</p>
                            <div class="pagination_line"></div>
                            <a class="pagi_btn text-thm" href="#">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
