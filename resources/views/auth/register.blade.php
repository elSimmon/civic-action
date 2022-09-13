@extends('layouts.main')

@section('content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <h2 class="breadcrumb_title">Register</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our LogIn Register -->
    <section class="our-log-reg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="sign_up_form inner_page">
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab2">
                                <form action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="form-group input-group">
                                        <input type="text" name="name" class="form-control" id="exampleInputName4" placeholder="Username">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group input-group mb20">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                    </div>
                                    <div class="form-group input-group mb20">
                                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                    <p class="text-center mb30 mt20">Already have an account? <a class="text-thm" href="{{route('login')}}">Sign In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
