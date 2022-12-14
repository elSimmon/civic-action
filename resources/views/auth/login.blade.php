@extends('layouts.main')

@section('content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <h2 class="breadcrumb_title">Sign in</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our SigIn -->
    <section class="our-log">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="login_form inner_page">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="inlineFormInputGroupUsername3" placeholder="Username / Email">
                                </div>
                                @error('email')
                                <p class="text-danger text-small">{{$message}}</p>
                                @enderror

                                <div class="input-group form-group mb5">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4" placeholder="Password">
                                </div>
                                @error('password')
                                <p class="text-danger text-small">{{$message}}</p>
                                @enderror

                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                    <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                                    <a class="btn-fpswd float-right" href="#">Forgot password?</a>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm">Sign in</button>
                                <p class="text-center mb30 mt20">Don't have an account? <a class="text-thm" href="{{route('register')}}">Sign up</a></p>

                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection
