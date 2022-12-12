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
                Work Order E
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('report_wo'); ?>" class="nav-link">
              <i class="far fa-file-alt ml-1 mr-1"></i>
              <p>
                Work Order Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('sparepartlist'); ?>" class="nav-link">
              <i class="fa fa-table"></i>
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
            <a href="<?php echo base_url('sparepartlist'); ?>" class="nav-link">
              <i class="fa fa-angle-double-right"></i>
              <p class="ml-1">
                Workshop
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?= base_url('workshop_electrical') ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                Electrical Drawing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('workshop_argon'); ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                Argon P&I Drawing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('workshop_airline') ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                Airline P&I Drawing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('company_water') ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                Water Supply Drawing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('argon_gas') ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                Argon Gas Consumption
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('power_consumption') ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                Power Consumption
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('atb_water') ?>" class="nav-link">
              <i class="ml-1 fa fa-file-pdf"></i>
              <p class="ml-1">
                ATB Water Consumption
              </p>
            </a>
          </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('login') ?>" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
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