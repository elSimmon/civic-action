@extends('layouts.main')

@section('content')
    @include('front.partials.dashboard_nav')

    <section class="our-dashbord dashbord bgc-f4">
        <div class="container">
            <div class="row">
                @include('back.partials.dashboard_mobile_nav')
                <div class="col-lg-12 mb10">
                    <div class="breadcrumb_content style2">
                        <h2 class="breadcrumb_title float-left">Hello {{\Illuminate\Support\Facades\Auth::user()->name}}!</h2>
                        <p class="float-right">Ready to jump back in!</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="my_dashboard_profile">
                                <h4 class="mb20">My Campaign's Participations: {{$pats->count()}}</h4>
                                <div class="row">
                                    <div class="col-lg-12 mt25">
                                        <div class="listing_table">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr class="carttable_row">
                                                    <th class="cartm_title">Campaign</th>
                                                    <th class="cartm_title">Name</th>
                                                    <th class="cartm_title">Email</th>
                                                    <th class="cartm_title">Phone</th>
                                                    <th class="cartm_title">State</th>
                                                    <th class="cartm_title">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                @foreach($pats as $pat)
                                                    <tr>
                                                        <td>{{$pat->campaign->title}}</td>
                                                        <td>{{$pat->name}}</td>
                                                        <td>{{$pat->email}}</td>
                                                        <td>{{$pat->phone}}</td>
                                                        <td>{{$pat->state->name}}
                                                        </td>
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
                                        {{$pats->links('pagination::bootstrap-4')}}
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
