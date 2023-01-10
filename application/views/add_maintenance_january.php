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
            <h6 class="m-0 font-weight-bold text-primary">Planned Preventive Maintenance January Form</h6>
          </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>Dashboard/save_preventive_january" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" required="required">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="machine">Machine</label>
                        <input type="text" class="form-control" name="machine" placeholder="Machine . . .">
                        <small class="form-text text-danger danger"><?= form_error('machine'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description . . .">
                      <small class="form-text text-danger danger"><?= form_error('description'); ?></small>
                    </div>
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="January">WW-01</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Sun">Sun | 01</label>
                      <select name="ww01_1" class='form-control'>
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon | 02</label>
                      <select class="form-control" name="ww01_2">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue | 03</label>
                      <select class="form-control" name="ww01_3">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed | 04</label>
                      <select class="form-control" name="ww01_4">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu | 05</label>
                      <select class="form-control" name="ww01_5">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri | 06</label>
                      <select class="form-control" name="ww01_6">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat | 07</label>
                      <select class="form-control" name="ww01_7">
                        <option value=""></option>
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
                      <label for="Sun">Sun | 08</label>
                      <select name="ww02_8" class='form-control'>
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon | 09</label>
                      <select class="form-control" name="ww02_9">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue | 10</label>
                      <select class="form-control" name="ww02_10">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed | 11</label>
                      <select class="form-control" name="ww02_11">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu | 12</label>
                      <select class="form-control" name="ww02_12">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri | 13</label>
                      <select class="form-control" name="ww02_13">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat | 14</label>
                      <select class="form-control" name="ww02_14">
                        <option value=""></option>
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
                      <label for="Sun">Sun | 15</label>
                      <select name="ww03_15" class='form-control'>
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon | 16</label>
                      <select class="form-control" name="ww03_16">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue | 17</label>
                      <select class="form-control" name="ww03_17">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed | 18</label>
                      <select class="form-control" name="ww03_18">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu | 19</label>
                      <select class="form-control" name="ww03_19">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri | 20</label>
                      <select class="form-control" name="ww03_20">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat | 21</label>
                      <select class="form-control" name="ww03_21">
                        <option value=""></option>
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
                      <label for="Sun">Sun | 22</label>
                      <select name="ww04_22" class='form-control'>
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon | 23</label>
                      <select class="form-control" name="ww04_23">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue | 24</label>
                      <select class="form-control" name="ww04_24">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="wed">Wed | 25</label>
                      <select class="form-control" name="ww04_25">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="thu">Thu | 26</label>
                      <select class="form-control" name="ww04_26">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="fri">Fri |27</label>
                      <select class="form-control" name="ww04_27">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-2">
                      <label for="sat">Sat | 28</label>
                      <select class="form-control" name="ww04_28">
                        <option value=""></option>
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
                      <label for="Sun">Sun | 29</label>
                      <select name="ww05_29" class='form-control'>
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="Mon">Mon | 30</label>
                      <select class="form-control" name="ww05_30">
                        <option value=""></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="tue">Tue | 31</label>
                      <select class="form-control" name="ww05_31">
                        <option value=""></option>
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
                <a href="<?= base_url(); ?>dashboard/checkreport_preventive" class="btn btn-primary float-left">Back</a>
                <button name="tambah" id="tambah" type="submit" class="btn btn-primary float-right">Submit <i class="fas fa-arrow-circle-right"></i></button>
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
