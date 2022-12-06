<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/White.png" alt="White" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Maintenance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('dashboard'); ?>" class="nav-link">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('form_wo'); ?>" class="nav-link">
              <i class="fas fa-fw fa-file-alt"></i>
              <p>
                Word Order E
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('sparepartlist'); ?>" class="nav-link">
              <i class="ml-1 far fa-file-alt"></i>
              <p class="ml-1">
                Spare Part List
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('sparepartlist'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PR Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sparepartlist/po_data'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PO Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sparepartlist/payment'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="ml-1 fas fa-sign-out-alt"></i>
              <p class="ml-1">
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>