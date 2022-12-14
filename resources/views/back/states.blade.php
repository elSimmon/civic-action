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
                                <h4 class="mb30">Add a State</h4>
                                <form method="POST" action="{{route('create-state')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group mt100-500">
                                                <label for="formGroupExampleInput1">State Name</label>
                                                <input type="text" name="name" class="form-control" id="formGroupExampleInput1" placeholder="Ebonyi" required>
                                            </div>
                                        </div>
                                        {{--                                    <div class="col-lg-12">--}}
                                        {{--                                        <div class="my_profile_setting_input form-group">--}}
                                        {{--                                            <label for="formGroupExampleInput8">Phone</label>--}}
                                        {{--                                            <input type="text" class="form-control" id="formGroupExampleInput8">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-lg-12">--}}
                                        {{--                                        <div class="my_profile_setting_input form-group">--}}
                                        {{--                                            <label for="formGroupExampleEmail">Email</label>--}}
                                        {{--                                            <input type="email" class="form-control" id="formGroupExampleEmail">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-xl-12">--}}
                                        {{--                                        <div class="my_profile_setting_textarea">--}}
                                        {{--                                            <label for="exampleFormControlTextarea1">Notes</label>--}}
                                        {{--                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-lg-6 col-xl-6">--}}
                                        {{--                                        <div class="my_profile_setting_input form-group">--}}
                                        {{--                                            <label for="formGroupExampleInput5">Facebook</label>--}}
                                        {{--                                            <input type="text" class="form-control" id="formGroupExampleInput5">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-lg-6 col-xl-6">--}}
                                        {{--                                        <div class="my_profile_setting_input form-group">--}}
                                        {{--                                            <label for="formGroupExampleInput6">Twitter</label>--}}
                                        {{--                                            <input type="text" class="form-control" id="formGroupExampleInput6">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-lg-6 col-xl-6">--}}
                                        {{--                                        <div class="my_profile_setting_input form-group">--}}
                                        {{--                                            <label for="formGroupExampleInput7">Google+</label>--}}
                                        {{--                                            <input type="text" class="form-control" id="formGroupExampleInput7">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-lg-6 col-xl-6">--}}
                                        {{--                                        <div class="my_profile_setting_input form-group">--}}
                                        {{--                                            <label for="formGroupExampleInput9">Instagram</label>--}}
                                        {{--                                            <input type="text" class="form-control" id="formGroupExampleInput9">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        <div class="col-xl-12">
                                            <div class="my_profile_setting_input">
                                                <button type="submit" class="btn update_btn">Save State</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="my_dashboard_profile">
                                <h4 class="mb20">Available States</h4>
                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <table class="table table-striped table-condensed table-success">
                                            <tr>
                                                <th>ID</th>
                                                <th>State Name</th>
                                                <th>LGAs</th>
                                            </tr>
                                            @foreach($states as $state)
                                                <tr>
                                                    <td>{{$state->id}}</td>
                                                    <td>{{$state->name}}</td>
                                                    <td>{{$state->lgas()->count()}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
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
