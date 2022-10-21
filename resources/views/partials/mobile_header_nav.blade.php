<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2 text-left">
                <img class="nav_logo_img img-fluid mt15" src="{{asset('guido/images/header-logo2.svg')}}" alt="header-logo2.svg">
                <span class="mt15">CivicAction</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#" data-toggle="modal" data-target="#staticBackdrop"><span class="flaticon-loupe"></span></a></li>
                <li class="list-inline-item"><a class="muser_icon" href="#"><span class="flaticon-avatar"></span></a></li>
                <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            @guest
            <li><a href="{{('/')}}">Home</a>
            </li>
            <li><a href="{{route('explore')}}">Campaigns</a>
            </li>
            <li><span>About</span>
            </li>
            <li><span>Contact</span>
            </li>
            <li><a href="{{route('login')}}"><span class="flaticon-avatar"></span> Login</a></li>
            <li><a href="{{route('register')}}"><span class="flaticon-edit"></span> Register</a></li>
            <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="{{route('create-campaign')}}"><span class="icon">+</span> New Campaign</a></li>
            @else
                <li><a href="{{route('home')}}"><span class="flaticon-avatar"></span> Dasbhaord</a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->role > 0)
                    <li>
                        <a href="{{route('admin-dashboard')}}"><span class="flaticon-avatar"></span>Admin Dashboard</a>
                    </li>
                @endif
            @endguest
        </ul>
    </nav>
</div>
