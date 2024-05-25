 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @php
        $permissionUser = App\Models\PermissionRole::getPermission('User',Auth::user()->role_id);
        $permissionRole = App\Models\PermissionRole::getPermission('Role',Auth::user()->role_id);
        $permissionCategory = App\Models\PermissionRole::getPermission('Category',Auth::user()->role_id);
        $permissionSubCategory = App\Models\PermissionRole::getPermission('Sub Category',Auth::user()->role_id);
        $permissionProduct = App\Models\PermissionRole::getPermission('Product',Auth::user()->role_id);
        $permissionSetting = App\Models\PermissionRole::getPermission('Setting',Auth::user()->role_id);
      @endphp
      <li class="nav-item">
        <a class="nav-link " href="/panel/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      @if (!empty($permissionUser))
      <li class="nav-item">
        <a class="nav-link collapsed" href="/panel/user">
          <i class="bi bi-person"></i>
          <span>User</span>
        </a>
      </li>
      @endif
     

      @if (!empty($permissionRole))
      <li class="nav-item">
        <a class="nav-link collapsed" href="/panel/role">
          <i class="bi bi-person"></i>
          <span>Role</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionCategory))
      <li class="nav-item">
        <a class="nav-link collapsed" href="/panel/role">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionSubCategory))
      <li class="nav-item">
        <a class="nav-link collapsed" href="/panel/role">
          <i class="bi bi-person"></i>
          <span>Sub Category</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionProduct))
      <li class="nav-item">
        <a class="nav-link collapsed" href="/panel/role">
          <i class="bi bi-person"></i>
          <span>Product</span>
        </a>
      </li>
      @endif

      @if (!empty($permissionSetting))
      <li class="nav-item">
        <a class="nav-link collapsed" href="/panel/role">
          <i class="bi bi-person"></i>
          <span>Setting</span>
        </a>
      </li>
      @endif

    </ul>

  </aside><!-- End Sidebar-->