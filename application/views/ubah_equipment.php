  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Masterlist of the Equipment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Masterlist of the Equipment</li>
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
            <h6 class="m-0 font-weight-bold text-primary">Masterlist of the Equipment Form</h6>
          </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $equipment_form['id']; ?>">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="code">Code</label>
                        <input type="text" class="form-control" name="code" value="<?= $equipment_form['code']; ?>">
                        <small class="form-text text-danger danger"><?= form_error('code'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="machine_description">Machine Description</label>
                      <input type="text" class="form-control" name="machine_description" value="<?= $equipment_form['machine_description']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('machine_description'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="family_name">Family Name</label>
                      <input type="text" class="form-control" name="family_name" value="<?= $equipment_form['family_name']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('family_name'); ?></small>
                    </div>                        
                    <div class="form-group col-md-6">
                      <label for="type_of_machine">Type of Machine</label>
                      <input type="text" class="form-control" name="type_of_machine" value="<?= $equipment_form['type_of_machine']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('type_of_machine'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="model">Model</label>
                      <input type="text" class="form-control" name="model" value="<?= $equipment_form['model']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('model'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="serial">Serial / Control</label>
                      <input type="text" class="form-control" name="serial" value="<?= $equipment_form['serial']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('serial'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="capacity">Capacity</label>
                      <input type="text" class="form-control" name="capacity" value="<?= $equipment_form['capacity']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('capacity'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="product">Product</label>
                      <input type="text" class="form-control" name="product" value="<?= $equipment_form['product']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('product'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="year">Year</label>
                      <input type="text" class="form-control" name="year" value="<?= $equipment_form['year']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('year'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" name="location" value="<?= $equipment_form['location']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('location'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" name="status" value="<?= $equipment_form['status']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('status'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="group">Group</label>
                      <input type="text" class="form-control" name="group" value="<?= $equipment_form['group']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('group'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pic">Pic</label>
                      <input type="text" class="form-control" name="pic" value="<?= $equipment_form['pic']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('pic'); ?></small>
                    </div>                                                       
                  </div>              
            </div>
              <div class="form-group row">
                <div class="col-12 pl-4 pr-4">
                  <a href="<?= base_url(); ?>dashboard/checkreport_equipment" class="btn btn-primary float-left">Back</a>
                  <button name="tambah" id="tambah" type="submit" class="btn btn-primary float-right">Save <i class="fas fa-arrow-circle-right"></i></button>
                </div>              
              </div>
            </form>
        </div>
      <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>
</html>
