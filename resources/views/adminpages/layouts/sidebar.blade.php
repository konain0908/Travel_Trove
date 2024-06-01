 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    
      <li class="nav-item">
        <a class="nav-link " href="/panel/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('ds')}}">
          <i class="bi bi-grid"></i>
          <span>Destinations Form</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('of')}}">
          <i class="bi bi-grid"></i>
          <span>Offers Form</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('so')}}">
          <i class="bi bi-grid"></i>
          <span>show offers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('sd')}}">
          <i class="bi bi-grid"></i>
          <span>Show Destinations </span>
        </a>
      </li>
      @if (!empty($permissionUser))
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>User</span>
        </a>
      </li>
      @endif
     

      @if (!empty($permissionRole))
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Role</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionCategory))
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionSubCategory))
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Sub Category</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionProduct))
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Product</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionSetting))
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Setting</span>
        </a>
      </li>
      @endif

    </ul>

  </aside><!-- End Sidebar-->