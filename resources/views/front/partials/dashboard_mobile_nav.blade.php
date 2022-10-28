<div class="col-lg-12">
    <div class="dashboard_navigationbar dn db-992">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
            <ul id="myDropdown" class="dropdown-content">
                <li><a href="{{route('home')}}"><span class="flaticon-web-page"></span> Dashboard</a></li>
                <li class="active"><a href="{{route('organization-profile')}}"><span class="flaticon-avatar"></span>  Profile</a></li>
                <li><a href="{{route('my-campaigns')}}"><span class="flaticon-list"></span> My Campaigns</a></li>
                <li><a href="{{route('participants')}}"><span class="flaticon-love"></span> Campaign Participants</a></li>
                <li><a href="{{route('my-reviews')}}"><span class="flaticon-note"></span> Campaign Reviews</a></li>
                <li><a href="{{route('my-targets')}}"><span class="flaticon-note"></span> My Targets</a></li>
            </ul>
        </div>
    </div>
</div>
