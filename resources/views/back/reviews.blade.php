@extends('layouts.main')

@section('content')
    @include('back.partials.dashboard_nav')

    <section class="our-dashbord dashbord bgc-f4">
        <div class="container">
            <div class="row">
                @include('back.partials.dashboard_mobile_nav')
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2">
                        <h2 class="breadcrumb_title float-left">Hello Admin, {{\Illuminate\Support\Facades\Auth::user()->name}}!</h2>
                        <p class="float-right">Ready to jump back in!</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="my_dashboard_profile">
                                <h4 class="mb20">All Reviews: {{number_format($reviews->count())}}</h4>
                                <div class="row">
                                    <div class="col-lg-12 mt25">
                                        <div class="listing_table">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr class="carttable_row">
                                                    <th class="cartm_title">Username</th>
                                                    <th class="cartm_title">Email</th>
                                                    <th class="cartm_title">Campaign</th>
                                                    <th class="cartm_title">Rating</th>
                                                    <th class="cartm_title">Comment</th>
                                                    <th class="cartm_title">Actions</th>
                                                    <th class="cartm_title"></th>
                                                </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                @foreach($reviews as $review)
                                                    <tr>
                                                        <td>{{$review->username}}</td>
                                                        <td>{{$review->email}}</td>
                                                        <td>{{$review->campaign->title}}</td>
                                                        <td style="width:170px">
                                                            @for($i=1; $i<=$review->rating; $i++)
                                                                <i class="fa fa-star text-warning"></i>
                                                            @endfor
                                                        </td>
                                                        <td>{{$review->comment}}</td>
                                                        <td class="editing_list">
                                                            <ul>
                                                                <li class="list-inline-item bg-danger">
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><span class="flaticon-delete text-white"></span></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mbp_pagination mt10">
                                            <ul class="page_navigation">
                                            </ul>
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
