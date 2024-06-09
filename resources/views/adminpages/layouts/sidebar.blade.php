<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
    @php
        $permissionUser = App\Models\PermissionRole::getPermission('User',Auth::user()->role_id);
        $permissionRole = App\Models\PermissionRole::getPermission('Role',Auth::user()->role_id);
        $permissionDestination = App\Models\PermissionRole::getPermission('Destination ',Auth::user()->role_id);
        $permissionOffer = App\Models\PermissionRole::getPermission('Offer ',Auth::user()->role_id);
        $permissionbookticket = App\Models\PermissionRole::getPermission('Book Ticket',Auth::user()->role_id);
       @endphp
       
        <li class="nav-item">
            <a class="nav-link" href="/panel/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (!empty($permissionDestination))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('ds') }}">
                <i class="bi bi-grid"></i>
                <span>Destinations Form</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role_id == 1)  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('of') }}">
                <i class="bi bi-grid"></i>
                <span>Offers Form</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role_id == 2)  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sb') }}">
                <i class="bi bi-grid"></i>
                <span>showbookings</span>
            </a>
        </li>
        @endif


        @if (!empty( $permissionOffer))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('so') }}">
                <i class="bi bi-grid"></i>
                <span>Show Offers</span>
            </a>
        </li>
        @endif

        @if (!empty( $permissionbookticket)) 
        <li class="nav-item">
            <a class="nav-link" href="{{ route('bf') }}">
                <i class="bi bi-grid"></i>
                <span>bookings Form</span>
            </a>
        </li>
        @endif

       
        

        @if (!empty($permissionDestination))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sd') }}">
                <i class="bi bi-grid"></i>
                <span>Show Destinations </span>
            </a>
        </li>
        @endif

        @if (!empty($permissionUser))
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.list')}}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li>
        @endif

        @if (!empty($permissionRole))
        <li class="nav-item">
            <a class="nav-link" href="{{route('role.list')}}">
                <i class="bi bi-person"></i>
                <span>Role</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="bi bi-person"></i>
                <span>Setting</span>
            </a>
        </li>
    
    </ul>
</aside>
<!-- End Sidebar-->
