<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{asset('guido/images/header-logo.svg')}}" alt="header-logo.svg">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{asset('guido/images/header-logo.svg')}}" alt="header-logo.svg">
                <img class="logo2 img-fluid" src="{{asset('guido/images/header-logo2.svg')}}" alt="header-logo2.svg">
                <span>Civic Action Africa</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <div class="ht_left_widget float-left">
                <ul>
                    <li class="list-inline-item">
                        <div class="ht_search_widget">
                            <div class="header_search_widget home1">
                                <form class="form-inline mailchimp_form">
                                    <input type="text" class="custom_search_with_menu_trigger form-control" placeholder="What are you looking for?" data-toggle="modal" data-target="#staticBackdrop">
                                    <button type="submit" class="btn"><span class="flaticon-loupe"></span></button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                <li>
                    <a href="{{('/')}}"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">Explore</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">About</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">Contact</span></a>
                </li>
                @guest
                <li class="list-inline-item list_s"><a href="#" class="btn flaticon-avatar" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-1200">Login/Sign Up</span></a></li>
                <li class="list-inline-item add_listing"><a href="{{route('create-campaign')}}"><span class="icon">+</span><span class="dn-lg"> New Campaign</span></a></li>
                @else
                    <li>
                        <a href="{{route('home')}}"><span class="title">Dashboard</span></a>
                    </li>
                    <li class="list-inline-item add_listing"><a href="{{route('create-campaign')}}"><span class="icon">+</span><span class="dn-lg"> New Campaign</span></a></li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
