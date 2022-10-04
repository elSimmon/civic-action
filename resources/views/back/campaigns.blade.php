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
                                <h4 class="mb20">All Campaigns</h4>
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
                                                    <th class="cartm_title">Status</th>
                                                    <th class="cartm_title">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                @foreach($camps as $camp)
                                                    <tr>
                                                        <th scope="row">
                                                            <ul class="cart_list">
                                                                <li class="list-inline-item pr10"><a href="#"><img src="{{asset('targets/'.$camp->target->image)}}" alt="Photo"></a></li>
                                                                <li class="list-inline-item"><a class="cart_title" href="#">{{$camp->target->fullname}}</a></li>
                                                            </ul>
                                                        </th>
                                                        <td>{{$camp->organization->name}}</td>
                                                        <td>{{$camp->title}}</td>
                                                        <td>{{$camp->category->name}}</td>
                                                        <td>{{$camp->state->name}}</td>
                                                        <td>{{number_format($camp->goal)}}</td>
                                                        <td>
                                                            @switch($camp->approved)
                                                                @case(2)
                                                                <span class="color-success">Approved</span>
                                                                @break
                                                                @case(1)
                                                                <span class="color-danger">Declined</span>
                                                                @break
                                                                @default
                                                                <span class="color-warning">Pending</span>
                                                            @endswitch
                                                        </td>
                                                        <td class="editing_list">
                                                            <ul>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><span class="flaticon-edit"></span></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><span class="flaticon-view"></span></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><span class="flaticon-delete"></span></a>
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
                                                <li class="page-item">
                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-left"></span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">15</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="fa fa-angle-right"></span></a>
                                                </li>
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
