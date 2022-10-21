<div class="col-lg-12">
    <div class="dashboard_navigationbar dn db-992">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
            <ul id="myDropdown" class="dropdown-content">
                <li><a href="{{route('admin-dashboard')}}"><span class="flaticon-web-page"></span> Dashboard</a></li>
                <li class="active"><a href="{{route('organizations')}}"><span class="flaticon-avatar"></span> Organizations</a></li>
                <li><a href="{{route('campaigns')}}"><span class="flaticon-list"></span>Campaigns</a></li>
                <li><a href="{{route('target-categories')}}"><span class="flaticon-list"></span>Target Categories</a></li>
                <li><a href="{{route('states')}}"><span class="flaticon-love"></span> States</a></li>
                <li><a href="{{route('categories')}}"><span class="flaticon-chat"></span> Categories</a></li>
                <li><a href="{{route('all-targets')}}"><span class="flaticon-note"></span> Targets</a></li>
                <li><a href="{{route('users')}}"><span class="flaticon-web-page"></span> Users</a></li>
                <li><a href="{{route('all-partcipants')}}"><span class="flaticon-note"></span> Participants</a></li>
                <li><a href="{{route('all-reviews')}}"><span class="flaticon-web-page"></span> Reviews</a></li>
            </ul>
        </div>
    </div>
</div>
