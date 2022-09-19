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
                        <div class="col-xl-4">
                            <div class="my_dashboard_profile mb30-lg">
                                <h4 class="mb30">Add a new Target</h4>
                                <form method="POST" action="{{route('new-target')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group mt100-500">
                                                <label for="formGroupExampleInput1">Full Name</label>
                                                <input type="text" name="fullname" class="form-control" id="formGroupExampleInput1" placeholder="Dino Mai Lier" required>
                                            </div>
                                            @error('fullname')
                                                <span class="text-danger text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInput8">Phone</label>
                                                <input type="text" name="phone_number" class="form-control" id="formGroupExampleInput8">
                                            </div>
                                            @error('phone_number')
                                            <span class="text-danger text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Email</label>
                                                <input type="email" name="email" class="form-control" id="formGroupExampleEmail">
                                            </div>
                                            @error('email')
                                            <span class="text-danger text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Constituency</label>
                                                <input type="text" name="constituency" class="form-control" id="formGroupExampleEmail">
                                            </div>
                                            @error('constituency')
                                            <span class="text-danger text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleEmail">Post/Designation</label>
                                                <input type="text" name="designation" class="form-control" id="formGroupExampleEmail">
                                            </div>
                                            @error('designation')
                                            <span class="text-danger text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>State*</label>
                                                <select id="sel_state" name="state_id" class="selectpicker" data-live-search="true" data-width="100%" required>
                                                    <option data-tokens="">Select State</option>
                                                    @foreach($states as $st)
                                                        <option value="{{$st->id}}" data-tokens="">{{$st->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('state_id')
                                            <span class="text-danger text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <h5 class="mb20">Photo (required)</h5>
                                            <ul class="mb0">
                                                <li class="list-inline-item vat mb30-767">
                                                    <div class="upload_file_input_add_remove">
                                                        <span class="btn_upload"><input name="image" type="file" id="imag2" title="Select an image of square dimensions" class="input-img" required/><span class="flaticon-upload"></span></span>
                                                        <img id="ImgPreview2" src="{{asset('guido/images/resource/upload-img.png')}}" class="preview2" alt="" />
                                                        <button id="removeImage2" class="btn-rmv2" type="button"><span class="flaticon-delete"></span></button>
                                                    </div>
                                                    <small>Maximum file size: 5mb.</small>
                                                    @error('image')
                                                    <span class="text-danger text-xs">{{$message}}</span>
                                                    @enderror
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="my_profile_setting_input">
                                                <button type="submit" class="btn btn-success update_btn">Save Target</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="my_dashboard_profile">
                                <h4 class="mb20">Available Targets</h4>
                                <div class="row">
                                    <div class="col-lg-12 mt25">
                                        <div class="listing_table">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr class="carttable_row">
                                                    <th class="cartm_title">Photo</th>
                                                    <th class="cartm_title">State</th>
                                                    <th class="cartm_title">Constituency</th>
                                                    <th class="cartm_title">Designation</th>
                                                    <th class="cartm_title">Status</th>
                                                    <th class="cartm_title"></th>
                                                </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                @foreach($targets as $tg)
                                                    <tr>
                                                    <th scope="row">
                                                        <ul class="cart_list">
                                                            <li class="list-inline-item pr10"><a href="#"><img src="{{asset('targets/'.$tg->image)}}" alt="Photo"></a></li>
                                                            <li class="list-inline-item"><a class="cart_title" href="#">{{$tg->fullname}}</a></li>
                                                        </ul>
                                                    </th>
                                                    <td>{{$tg->state->name}}</td>
                                                    <td>{{$tg->constituency}}</td>
                                                    <td>{{$tg->designation}}</td>
                                                    <td>
                                                        @switch($tg->approved)
                                                            @case(1)
                                                                <span class="color-success">Approved</span>
                                                                @break
                                                            @case(0)
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
