<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
      <!-- mulai disini -->
        <div class="card">
            <div class="card-header">
                <h4><span class="text-info"><?= $user['employee_name'];?></span> | <span><?= $user['employee_id'];?></span></h4>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Employee ID</label>
                            <input class="form-control" value="<?= $user['employee_id'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" value="<?= $user['employee_name'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" value="<?= $user['email'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <input class="form-control" value="<?= $user['department_id']; ?>" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>
</html>
