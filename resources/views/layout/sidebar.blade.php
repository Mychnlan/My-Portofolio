<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
       
          <li class="nav-item">
            <a href="/petugas/home" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Home</p>
            </a>
          </li>
       
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-chart-bar ml-2"></i>
          <p class="ml-1">products 
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
        
          <li class="nav-item {{ (strpos(Route::currentRouteName(), 'products.index') == 0) ? 'active' : '' }}">
            <a href="/products" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View</p>
            </a>
          </li>
       
         
        </ul>
      </li>

    </ul>
  </nav>