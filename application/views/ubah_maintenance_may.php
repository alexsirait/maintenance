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
            <h6 class="m-0 font-weight-bold text-primary">Planned Preventive Maintenance May</h6>
          </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $preventive_maintenance_form_may['id']; ?>">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="machine">Machine</label>
                        <input type="text" class="form-control" name="machine" value="<?= $preventive_maintenance_form_may['machine']; ?>">
                        <small class="form-text text-danger danger"><?= form_error('machine'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" value="<?= $preventive_maintenance_form_may['description']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('description'); ?></small>
                    </div>
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="may">WW-01</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon |</label>
                      <select class="form-control" name="ww01_1">
                        <option value="<?= $preventive_maintenance_form_may['ww01_1']; ?>"><?= $preventive_maintenance_form_may['ww01_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue |</label>
                      <select class="form-control" name="ww01_2">
                        <option value="<?= $preventive_maintenance_form_may['ww01_2']; ?>"><?= $preventive_maintenance_form_may['ww01_2']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="wed">Wed |</label>
                      <select class="form-control" name="ww01_3">
                        <option value="<?= $preventive_maintenance_form_may['ww01_3']; ?>"><?= $preventive_maintenance_form_may['ww01_3']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu |</label>
                      <select class="form-control" name="ww01_4">
                        <option value="<?= $preventive_maintenance_form_may['ww01_4']; ?>"><?= $preventive_maintenance_form_may['ww01_4']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri |</label>
                      <select class="form-control" name="ww01_5">
                        <option value="<?= $preventive_maintenance_form_may['ww01_5']; ?>"><?= $preventive_maintenance_form_may['ww01_5']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat |</label>
                      <select class="form-control" name="ww01_6">
                        <option value="<?= $preventive_maintenance_form_may['ww01_6']; ?>"><?= $preventive_maintenance_form_may['ww01_6']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="February">WW-02</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Sun">Sun |</label>
                      <select name="ww02_7" class='form-control'>
                        <option value="<?= $preventive_maintenance_form_may['ww02_7']; ?>"><?= $preventive_maintenance_form_may['ww02_7']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon |</label>
                      <select class="form-control" name="ww02_8">
                        <option value="<?= $preventive_maintenance_form_may['ww02_8']; ?>"><?= $preventive_maintenance_form_may['ww02_8']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue |</label>
                      <select class="form-control" name="ww02_9">
                        <option value="<?= $preventive_maintenance_form_may['ww02_9']; ?>"><?= $preventive_maintenance_form_may['ww02_9']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed |</label>
                      <select class="form-control" name="ww02_10">
                        <option value="<?= $preventive_maintenance_form_may['ww02_10']; ?>"><?= $preventive_maintenance_form_may['ww02_10']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu |</label>
                      <select class="form-control" name="ww02_11">
                        <option value="<?= $preventive_maintenance_form_may['ww02_11']; ?>"><?= $preventive_maintenance_form_may['ww02_11']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri |</label>
                      <select class="form-control" name="ww02_12">
                        <option value="<?= $preventive_maintenance_form_may['ww02_12']; ?>"><?= $preventive_maintenance_form_may['ww02_12']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat |</label>
                      <select class="form-control" name="ww02_13">
                        <option value="<?= $preventive_maintenance_form_may['ww02_13']; ?>"><?= $preventive_maintenance_form_may['ww02_13']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                  </div>
                  <hr>                    
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="February">WW-03</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Sun">Sun |</label>
                      <select name="ww03_14" class='form-control'>
                        <option value="<?= $preventive_maintenance_form_may['ww03_14']; ?>"><?= $preventive_maintenance_form_may['ww03_14']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon |</label>
                      <select class="form-control" name="ww03_15">
                        <option value="<?= $preventive_maintenance_form_may['ww03_15']; ?>"><?= $preventive_maintenance_form_may['ww03_15']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue |</label>
                      <select class="form-control" name="ww03_16">
                        <option value="<?= $preventive_maintenance_form_may['ww03_16']; ?>"><?= $preventive_maintenance_form_may['ww03_16']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed |</label>
                      <select class="form-control" name="ww03_17">
                        <option value="<?= $preventive_maintenance_form_may['ww03_17']; ?>"><?= $preventive_maintenance_form_may['ww03_17']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu |</label>
                      <select class="form-control" name="ww03_18">
                        <option value="<?= $preventive_maintenance_form_may['ww03_18']; ?>"><?= $preventive_maintenance_form_may['ww03_18']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri |</label>
                      <select class="form-control" name="ww03_19">
                        <option value="<?= $preventive_maintenance_form_may['ww03_19']; ?>"><?= $preventive_maintenance_form_may['ww03_19']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat |</label>
                      <select class="form-control" name="ww03_20">
                        <option value="<?= $preventive_maintenance_form_may['ww03_20']; ?>"><?= $preventive_maintenance_form_may['ww03_20']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="February">WW-04</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Sun">Sun |</label>
                      <select name="ww04_21" class='form-control'>
                        <option value="<?= $preventive_maintenance_form_may['ww04_21']; ?>"><?= $preventive_maintenance_form_may['ww04_21']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon |</label>
                      <select class="form-control" name="ww04_22">
                        <option value="<?= $preventive_maintenance_form_may['ww04_22']; ?>"><?= $preventive_maintenance_form_may['ww04_22']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue |</label>
                      <select class="form-control" name="ww04_23">
                        <option value="<?= $preventive_maintenance_form_may['ww04_23']; ?>"><?= $preventive_maintenance_form_may['ww04_23']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed |</label>
                      <select class="form-control" name="ww04_24">
                        <option value="<?= $preventive_maintenance_form_may['ww04_24']; ?>"><?= $preventive_maintenance_form_may['ww04_24']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu |</label>
                      <select class="form-control" name="ww04_25">
                        <option value="<?= $preventive_maintenance_form_may['ww04_25']; ?>"><?= $preventive_maintenance_form_may['ww04_25']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri |</label>
                      <select class="form-control" name="ww04_26">
                        <option value="<?= $preventive_maintenance_form_may['ww04_26']; ?>"><?= $preventive_maintenance_form_may['ww04_26']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat |</label>
                      <select class="form-control" name="ww04_27">
                        <option value="<?= $preventive_maintenance_form_may['ww04_27']; ?>"><?= $preventive_maintenance_form_may['ww04_27']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="February">WW-05</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Sun">Sun |</label>
                      <select name="ww05_28" class='form-control'>
                        <option value="<?= $preventive_maintenance_form_may['ww05_28']; ?>"><?= $preventive_maintenance_form_may['ww05_28']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon |</label>
                      <select class="form-control" name="ww05_29">
                        <option value="<?= $preventive_maintenance_form_may['ww05_29']; ?>"><?= $preventive_maintenance_form_may['ww05_29']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue |</label>
                      <select class="form-control" name="ww05_30">
                        <option value="<?= $preventive_maintenance_form_may['ww05_30']; ?>"><?= $preventive_maintenance_form_may['ww05_30']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed |</label>
                      <select class="form-control" name="ww05_31">
                        <option value="<?= $preventive_maintenance_form_may['ww05_31']; ?>"><?= $preventive_maintenance_form_may['ww05_31']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                 
                  </div>
                  <hr>
            </div>
            <div class="form-group row">
              <div class="col-12 pl-4 pr-4">
                <a href="<?= base_url(); ?>dashboard/checkreport_preventive_may" class="btn btn-primary float-left">Back</a>
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
