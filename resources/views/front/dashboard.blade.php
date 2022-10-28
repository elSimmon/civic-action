@extends('layouts.main')
@section('title', 'My Dashboard')

@section('content')
    @include('front.partials.dashboard_nav')

    <section class="our-dashbord dashbord bgc-f4">
        <div class="container">
            <div class="row">
                @include('front.partials.dashboard_mobile_nav')
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2">
                        <h2 class="breadcrumb_title float-left">Hello, {{\Illuminate\Support\Facades\Auth::user()->name}}!</h2>
                        <p class="float-right">Ready to jump back in!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one">
                        <div class="icon"><span class="flaticon-list"></span></div>
                        <div class="detais">
                            <div class="timer">{{$my_campaigns->count()}}</div>
                            <p>My Campaigns</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one style2">
                        <div class="icon"><span class="flaticon-note"></span></div>
                        <div class="detais">
                            <div class="timer">{{$my_pats->count()}}</div>
                            <p>My Campaign Participants</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one style3">
                        <div class="icon"><span class="flaticon-chat"></span></div>
                        <div class="detais">
                            <div class="timer">{{$my_revs->count()}}</div>
                            <p>Campaign Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one style4">
                        <div class="icon"><span class="flaticon-love"></span></div>
                        <div class="detais">
                            <div class="timer">{{$my_targs->count()}}</div>
                            <p>Targets I Uploaded</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="recent_job_activity">
                            <h4 class="title">Participation Activities</h4>
                            @foreach($my_pats as $pat)
                                <div class="grid style1">
                                <ul>
                                    <li class="list-inline-item btn-success"><div class="icon"><span class="fa fa-check"></span></div></li>
                                    <li class="list-inline-item"><p>{{$pat->name}} participated on <span class="text-success text-success">{{$pat->campaign->title}}</span> {{\Carbon\Carbon::parse($pat->created_at)->diffForHumans()}}</p></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="recent_job_activity">
                        <h4 class="title">Review Activities</h4>
                        @foreach($my_revs as $rev)
                            <div class="grid style1">
                            <ul>
                                <li class="list-inline-item"><div class="icon"><span class="fa fa-check"></span></div></li>
                                <li class="list-inline-item"><p>{{$rev->username}} reviewed <span class="text-success">{{$rev->campaign->title}}</span> {{\Carbon\Carbon::parse($rev->created_at)->diffForHumans()}}</p></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
