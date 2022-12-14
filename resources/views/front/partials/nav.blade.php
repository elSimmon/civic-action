<header class="header-nav menu_style_home_one style2 dashbord menu-fixed main-menu">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle" style="display: none;">
                <img class="nav_logo_img img-fluid" src="{{asset('guido/images/header-logo.svg')}}" alt="header-logo.svg">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{('/')}}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{asset('guido/images/header-logo2.svg')}}" alt="header-logo.svg">
                <img class="logo2 img-fluid" src="{{asset('guido/images/header-logo2.svg')}}" alt="header-logo2.svg">
                <span>CivicAction</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->

            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                @guest
                    <li>
                        <a href="{{route('explore')}}"><span class="title">Campaigns</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="title">About</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="title">Contact</span></a>
                    </li>
                @else
                    <li>
                        <a href="{{route('explore')}}"><span class="title">Campaigns</span></a>
                    </li>
                    <li>
                        <a href="{{route('home')}}"><span class="title">Dashboard</span></a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->role > 0)
                        <li>
                            <a href="{{route('admin-dashboard')}}"><span class="title">Admin Dashboard</span></a>
                        </li>
                    @endif
                    <li class="user_setting">
                        <div class="dropdown">
                            @if(\Illuminate\Support\Facades\Auth::user()->organization == null)
                                <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="{{asset('guido/images/team/e1.png')}}" alt="Organization Logo"> <span class="dn-1366"> {{\Illuminate\Support\Facades\Auth::user()->name}} <span class="fa fa-angle-down"></span></span>
                                </a>
                            @else
                                <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle img-fluid" height="50px" width="50px" src="{{asset('logos/'.\Illuminate\Support\Facades\Auth::user()->organization->logo)}}" alt="Organization Logo"> <span class="dn-1366"> {{\Illuminate\Support\Facades\Auth::user()->name}} <span class="fa fa-angle-down"></span></span>
                                </a>
                            @endif
                            <div class="dropdown-menu">
                                <div class="user_set_header">
                                    @if(\Illuminate\Support\Facades\Auth::user()->organization == null)
                                        <img class="float-left" src="{{asset('guido/images/team/e1.png')}}" alt="Organization logo">
                                    @else
                                        <img class="float-left" src="{{asset('logos/'.\Illuminate\Support\Facades\Auth::user()->organization->logo)}}" alt="Organization Logo">
                                    @endif
                                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}} <br><span class="address">{{\Illuminate\Support\Facades\Auth::user()->email}}</span></p>
                                </div>
                                <div class="user_setting_content">
                                    <a class="dropdown-item active" href="{{route('organization-profile')}}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                @endguest
                <li class="list-inline-item add_listing"><a href="{{route('create-campaign')}}"><span class="icon">+</span><span class="dn-lg"> New Campaign</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>



