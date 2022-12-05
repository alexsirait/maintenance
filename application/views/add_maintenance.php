  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Planned Preventive Maintenance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Planned Preventive Maintenance</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
      <!-- mulai disini -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Planned Preventive Maintenance Form</h6>
          </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" required="required">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="machine">Machine</label>
                        <input type="text" class="form-control" name="machine">
                        <small class="form-text text-danger danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description">
                      <small class="form-text text-danger danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="section">Section</label>
                      <input type="text" class="form-control" name="section">
                    </div>                                                                                                   
                  </div>
              </form>
            </div>
            <div class="form-group row">
              <div class="col-8 pl-4">
                <a href="<?= base_url(); ?>dashboard/preventive_maintenance" class="btn btn-primary float-left">Back</a>
              </div>
              <div class="offset-4 col-8 pr-4">
                <button name="tambah" id="tambah" type="submit" class="btn btn-primary float-right">Submit</button>                
              </div>
            </div>
        </div>
      <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>
</html>
