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
              <form action="<?php echo base_url(); ?>Dashboard/save_equipment" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" required="required">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="code">Code</label>
                        <input type="text" class="form-control" name="code">
                        <small class="form-text text-danger danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="machine_description">Machine Description</label>
                      <input type="text" class="form-control" name="machine_description">
                      <small class="form-text text-danger danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="family_name">Family Name</label>
                      <input type="text" class="form-control" name="family_name">
                    </div>                        
                    <div class="form-group col-md-6">
                      <label for="type_of_machine">Type of Machine</label>
                      <input type="text" class="form-control" name="type_of_machine">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="model">Model</label>
                      <input type="text" class="form-control" name="model">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="serial">Serial / Control</label>
                      <input type="text" class="form-control" name="serial">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="capacity">Capacity</label>
                      <input type="text" class="form-control" name="capacity">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="product">Product</label>
                      <input type="text" class="form-control" name="product">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="year">Year</label>
                      <input type="text" class="form-control" name="year">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" name="location">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" name="status">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="group">Group</label>
                      <input type="text" class="form-control" name="group">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pic">Pic</label>
                      <input type="text" class="form-control" name="pic">
                    </div>                                                       
                  </div>              
            </div>
              <div class="form-group row">
                <div class="col-12 pl-4 pr-4">
                  <a href="<?= base_url(); ?>dashboard/equipment_list" class="btn btn-primary float-left">Back</a>
                  <button name="submit" id="submit" type="submit" class="btn btn-primary float-right">Submit</button>
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
