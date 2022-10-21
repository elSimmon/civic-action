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
                                <h4 class="mb30">Add Target Categories</h4>
                                <form method="POST" action="{{route('create-target-categories')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group mt100-500">
                                                <label for="formGroupExampleInput1">Category Name</label>
                                                <input type="text" name="name" class="form-control" id="formGroupExampleInput1" placeholder="Senators" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group mt100-500">
                                                <label for="formGroupExampleInput1">Category Description</label>
                                                <textarea name="description" class="form-control" placeholder="Upper Chambers" rows="8" cols="9"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="my_profile_setting_input">
                                                <button type="submit" class="btn update_btn">Save Category</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="my_dashboard_profile">
                                <h4 class="mb20">Target Categories</h4>
                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <table class="table table-striped table-condensed table-success">
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Description</th>
                                            </tr>
                                            @foreach($categories as $cat)
                                                <tr>
                                                    <td>{{$cat->id}}</td>
                                                    <td>{{$cat->name}}</td>
                                                    <td>{{$cat->description}}</td>
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
