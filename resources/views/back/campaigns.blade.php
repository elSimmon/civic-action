@extends('layouts.main')
@section('title', 'All Campaigns')

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
                                <h4 class="mb20">All Campaigns: {{$camps->count()}}</h4>
                                <div class="row">
                                    <div class="col-lg-12 mt25">
                                        <div class="listing_table">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr class="carttable_row">
                                                    <th class="cartm_title">Target</th>
                                                    <th class="cartm_title">Organization</th>
                                                    <th class="cartm_title">Title</th>
                                                    <th class="cartm_title">Category</th>
                                                    <th class="cartm_title">State</th>
                                                    <th class="cartm_title">Goal</th>
                                                    <th class="cartm_title">Views</th>
                                                    <th class="cartm_title">Status</th>
                                                    <th class="cartm_title">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                @foreach($camps as $camp)
                                                    <tr>
                                                        <th scope="row">
                                                            <ul class="cart_list">
                                                                <li class="list-inline-item pr10"><a href="#"><img src="{{asset('campaign_images/'.$camp->image)}}" alt="Photo"></a></li>
                                                                <li class="list-inline-item"><a class="cart_title" href="#">{{$camp->target_category->name}}</a></li>
                                                            </ul>
                                                        </th>
                                                        <td>{{$camp->organization->name}}</td>
                                                        <td>{{$camp->title}}</td>
                                                        <td>{{$camp->category->name}}</td>
                                                        <td>{{$camp->state->name}}</td>
                                                        <td>{{number_format($camp->goal)}}</td>
                                                        <td>{{number_format($camp->views->count())}}</td>
                                                        <td>
                                                            @switch($camp->approved)
                                                                @case(1)
                                                                <span class="color-success">Approved</span>
                                                                @break
                                                                @case(0)
                                                                <span class="color-danger">Not Approved</span>
                                                                @break
                                                                @default
                                                                <span class="color-warning">N/A</span>
                                                            @endswitch
                                                        </td>
                                                        <td class="editing_list">
                                                            <ul>
                                                                <li class="list-inline-item bg-success">
                                                                    <a href="{{route('approve-campaign',[$camp->id])}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve"><span class="fa fa-check text-white"></span></a>
                                                                </li>
                                                                <li class="list-inline-item bg-danger">
                                                                    <a href="{{route('decline-campaign',[$camp->id])}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Decline"><span class="fa fa-close text-white"></span></a>
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
                                        {{$camps->links('pagination::bootstrap-4')}}
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
