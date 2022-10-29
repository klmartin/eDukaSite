  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/logo/Capture.JPG')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="  {{route('firstSection')}} " class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                First Section
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="  {{route('aboutus')}} " class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="  {{route('whyus')}} " class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Why US
              </p>
            </a>
           
          </li>
           <li class="nav-item">
            <a href="  {{route('features')}} " class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Features
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="  {{route('screenshots')}} " class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Screenshots
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="  {{route('packages')}} " class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               packages
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="  {{route('contact')}} " class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Contact
              </p>
            </a>
          </li>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>