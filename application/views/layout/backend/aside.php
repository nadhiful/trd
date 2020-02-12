<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/backend/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/backend/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator TRD</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/profile') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/vision') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Perusahaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/mission') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Misi Perusahaan</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Unit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/diesel') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DM(Diesel Manufacture)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/marine') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SM(Santosa Marine)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/machine') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MC(Machining Center)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Extended Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/career') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/event') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
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