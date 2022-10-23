@extends('layouts.main')

@section('content')
    @include('back.partials.dashboard_nav')

    <section class="our-dashbord dashbord bgc-f4">
        <div class="container">
            <div class="row">
                @include('back.partials.dashboard_mobile_nav')
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2">
                        <h2 class="breadcrumb_title float-left">Hello, {{\Illuminate\Support\Facades\Auth::user()->name}}!</h2>
                        <p class="float-right text-bg-danger text-bold">Logged in as Admin!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one">
                        <div class="icon"><span class="flaticon-list"></span></div>
                        <div class="detais">
                            <div class="timer">{{$profiles->count()}}</div>
                            <p>Active Organizations</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one style2">
                        <div class="icon"><span class="flaticon-note"></span></div>
                        <div class="detais">
                            <div class="timer">{{$campaigns->count()}}</div>
                            <p>Total Campaigns</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one style3">
                        <div class="icon"><span class="fa fa-user"></span></div>
                        <div class="detais">
                            <div class="timer">{{$targets->count()}}</div>
                            <p>Campaign Targets</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="ff_one style4">
                        <div class="icon"><span class="flaticon-love"></span></div>
                        <div class="detais">
                            <div class="timer">{{$participants->count()}}</div>
                            <p>Participants</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="application_statics">
                        <h4>Total Views</h4>
                        <div class="c_container"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="recent_job_activity">
                        <h4 class="title">Recent Participants</h4>
                        @foreach($recent_participants as $part)
                            <div class="grid style1">
                            <ul>
                                <li class="list-inline-item"><div class="icon"><span class="fa fa-check"></span></div></li>
                                <li class="list-inline-item"><p>{{$part->name}}; <span>{{$part->email}};</span> {{$part->phone}}. <br/><span class="text-success">{{$part->campaign->title}}</span></p></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
