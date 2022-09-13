<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md mt100" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body container pb20 pl0 pr0 pt0">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content container" id="myTabContent">
                    <div class="row mt40 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-lg-12">
                            <div class="login_form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="email" name="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email">
                                    </div>
                                    <div class="input-group form-group mb5">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                        <a class="btn-fpswd float-right" href="#">Forgot password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt40 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-lg-12">
                            <div class="sign_up_form">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group input-group">
                                                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Username">
                                            </div>
                                            <div class="form-group input-group">
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                            </div>
                                            <div class="form-group input-group mb20">
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                            </div>
                                            <div class="form-group input-group mb20">
                                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="Password Repeat">
                                            </div>
                                            <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
