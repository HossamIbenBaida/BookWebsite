  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt "></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{url('/admin')}}" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book Website</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{request()->is('categories') ? 'menu-open' : ''}} {{request()->is('addcategory') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('categories') ? 'active' : ''}} {{request()->is('addcategory') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/addcategory')}}" class="nav-link {{request()->is('addcategory') ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/categories')}}" class="nav-link {{request()->is('categories') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{request()->is('addbook') ? 'menu-open' : ''}} {{request()->is('books') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('addbook') ? 'active' : ''}} {{request()->is('books') ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                books
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/addbook')}}" class="nav-link {{request()->is('addbook') ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add book</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/books')}}" class="nav-link {{request()->is('books') ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>books</p>
                </a>
              </li>
            </ul>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>