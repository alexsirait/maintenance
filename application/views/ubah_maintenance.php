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
              <input type="hidden" name="id" value="<?= $preventive_maintenance_form['id']; ?>">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="machine">Machine</label>
                        <input type="text" class="form-control" name="machine" value="<?= $preventive_maintenance_form['machine']; ?>">
                        <small class="form-text text-danger danger"><?= form_error('machine'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" value="<?= $preventive_maintenance_form['description']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('description'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="section">Section</label>
                      <input type="text" class="form-control" name="section" value="<?= $preventive_maintenance_form['section']; ?>">
                      <small class="form-text text-danger danger"><?= form_error('section'); ?></small>
                    </div>
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="form-gorup col-md-12 text-info">
                      <label for="January">January</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww01">WW01</label>
                      <select name="ww01" class='form-control'>
                        <option value="<?= $preventive_maintenance_form['ww01']; ?>"><?= $preventive_maintenance_form['ww01']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww02">WW02</label>
                      <select class="form-control" name="ww02">
                        <option value="<?= $preventive_maintenance_form['ww02']; ?>"><?= $preventive_maintenance_form['ww02']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww03">WW03</label>
                      <select class="form-control" name="ww03">
                        <option value="<?= $preventive_maintenance_form['ww03']; ?>"><?= $preventive_maintenance_form['ww03']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww04">WW04</label>
                      <select class="form-control" name="ww04">
                        <option value="<?= $preventive_maintenance_form['ww04']; ?>"><?= $preventive_maintenance_form['ww04']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww05">WW05</label>
                      <select class="form-control" name="ww05">
                        <option value="<?= $preventive_maintenance_form['ww05']; ?>"><?= $preventive_maintenance_form['ww05']; ?></option>
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
                      <label for="February">February</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww06">WW06</label>
                      <select class="form-control" name="ww06">
                        <option value="<?= $preventive_maintenance_form['ww06']; ?>"><?= $preventive_maintenance_form['ww06']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww07">WW07</label>
                      <select class="form-control" name="ww07">
                        <option value="<?= $preventive_maintenance_form['ww07']; ?>"><?= $preventive_maintenance_form['ww07']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww08">WW08</label>
                      <select class="form-control" name="ww08">
                        <option value="<?= $preventive_maintenance_form['ww08']; ?>"><?= $preventive_maintenance_form['ww08']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww09">WW09</label>
                      <select class="form-control" name="ww09">
                        <option value="<?= $preventive_maintenance_form['ww09']; ?>"><?= $preventive_maintenance_form['ww09']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww10">WW10</label>
                      <select class="form-control" name="ww10">
                        <option value="<?= $preventive_maintenance_form['ww10']; ?>"><?= $preventive_maintenance_form['ww10']; ?></option>
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
                      <label for="February">March</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww10_1">WW10</label>
                      <select class="form-control" name="ww10_1">
                      <option value="<?= $preventive_maintenance_form['ww10_1']; ?>"><?= $preventive_maintenance_form['ww10_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww11">WW11</label>
                      <select class="form-control" name="ww11">
                        <option value="<?= $preventive_maintenance_form['ww11']; ?>"><?= $preventive_maintenance_form['ww11']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww12">WW12</label>
                      <select class="form-control" name="ww12">
                        <option value="<?= $preventive_maintenance_form['ww12']; ?>"><?= $preventive_maintenance_form['ww12']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww13">WW13</label>
                      <select class="form-control" name="ww13">
                        <option value="<?= $preventive_maintenance_form['ww13']; ?>"><?= $preventive_maintenance_form['ww13']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww14">WW14</label>
                      <select class="form-control" name="ww14">
                        <option value="<?= $preventive_maintenance_form['ww14']; ?>"><?= $preventive_maintenance_form['ww14']; ?></option>
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
                      <label for="February">April</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww14_1">WW14</label>
                      <select class="form-control" name="ww14_1">
                        <option value="<?= $preventive_maintenance_form['ww14_1']; ?>"><?= $preventive_maintenance_form['ww14_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww15">WW15</label>
                      <select class="form-control" name="ww15">
                        <option value="<?= $preventive_maintenance_form['ww15']; ?>"><?= $preventive_maintenance_form['ww15']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww16">WW16</label>
                      <select class="form-control" name="ww16">
                        <option value="<?= $preventive_maintenance_form['ww16']; ?>"><?= $preventive_maintenance_form['ww16']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww17">WW17</label>
                      <select class="form-control" name="ww17">
                        <option value="<?= $preventive_maintenance_form['ww17']; ?>"><?= $preventive_maintenance_form['ww17']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww18">WW18</label>
                      <select class="form-control" name="ww18">
                        <option value="<?= $preventive_maintenance_form['ww18']; ?>"><?= $preventive_maintenance_form['ww18']; ?></option>
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
                      <label for="February">May</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww18_1">WW18</label>
                      <select class="form-control" name="ww18_1">
                        <option value="<?= $preventive_maintenance_form['ww18_1']; ?>"><?= $preventive_maintenance_form['ww18_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww19">WW19</label>
                      <select class="form-control" name="ww19">
                        <option value="<?= $preventive_maintenance_form['ww19']; ?>"><?= $preventive_maintenance_form['ww19']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww20">WW20</label>
                      <select class="form-control" name="ww20">
                        <option value="<?= $preventive_maintenance_form['ww20']; ?>"><?= $preventive_maintenance_form['ww20']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww21">WW21</label>
                      <select class="form-control" name="ww21">
                        <option value="<?= $preventive_maintenance_form['ww21']; ?>"><?= $preventive_maintenance_form['ww21']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww22">WW22</label>
                      <select class="form-control" name="ww22">
                        <option value="<?= $preventive_maintenance_form['ww22']; ?>"><?= $preventive_maintenance_form['ww22']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww23">WW23</label>
                      <select class="form-control" name="ww23">
                        <option value="<?= $preventive_maintenance_form['ww23']; ?>"><?= $preventive_maintenance_form['ww23']; ?></option>
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
                      <label for="February">June</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww23_1">WW23</label>
                      <select class="form-control" name="ww23_1">
                        <option value="<?= $preventive_maintenance_form['ww23_1']; ?>"><?= $preventive_maintenance_form['ww23_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww24">WW24</label>
                      <select class="form-control" name="ww24">
                        <option value="<?= $preventive_maintenance_form['ww24']; ?>"><?= $preventive_maintenance_form['ww24']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww25">WW25</label>
                      <select class="form-control" name="ww25">
                        <option value="<?= $preventive_maintenance_form['ww25']; ?>"><?= $preventive_maintenance_form['ww25']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww26">WW26</label>
                      <select class="form-control" name="ww26">
                        <option value="<?= $preventive_maintenance_form['ww26']; ?>"><?= $preventive_maintenance_form['ww26']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww27">WW27</label>
                      <select class="form-control" name="ww27">
                        <option value="<?= $preventive_maintenance_form['ww27']; ?>"><?= $preventive_maintenance_form['ww27']; ?></option>
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
                      <label for="February">July</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww27_1">WW27</label>
                      <select class="form-control" name="ww27_1">
                        <option value="<?= $preventive_maintenance_form['ww27_1']; ?>"><?= $preventive_maintenance_form['ww27_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww28">WW28</label>
                      <select class="form-control" name="ww28">
                        <option value="<?= $preventive_maintenance_form['ww28']; ?>"><?= $preventive_maintenance_form['ww28']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww29">WW29</label>
                      <select class="form-control" name="ww29">
                        <option value="<?= $preventive_maintenance_form['ww29']; ?>"><?= $preventive_maintenance_form['ww29']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww30">WW30</label>
                      <select class="form-control" name="ww30">
                        <option value="<?= $preventive_maintenance_form['ww30']; ?>"><?= $preventive_maintenance_form['ww30']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww31">WW31</label>
                      <select class="form-control" name="ww31">
                        <option value="<?= $preventive_maintenance_form['ww31']; ?>"><?= $preventive_maintenance_form['ww31']; ?></option>
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
                      <label for="February">August</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww32">WW32</label>
                      <select class="form-control" name="ww32">
                        <option value="<?= $preventive_maintenance_form['ww32']; ?>"><?= $preventive_maintenance_form['ww32']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww33">WW33</label>
                      <select class="form-control" name="ww33">
                        <option value="<?= $preventive_maintenance_form['ww33']; ?>"><?= $preventive_maintenance_form['ww33']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww34">WW34</label>
                      <select class="form-control" name="ww34">
                        <option value="<?= $preventive_maintenance_form['ww34']; ?>"><?= $preventive_maintenance_form['ww34']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww35">WW35</label>
                      <select class="form-control" name="ww35">
                        <option value="<?= $preventive_maintenance_form['ww35']; ?>"><?= $preventive_maintenance_form['ww35']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww36">WW36</label>
                      <select class="form-control" name="ww36">
                        <option value="<?= $preventive_maintenance_form['ww36']; ?>"><?= $preventive_maintenance_form['ww36']; ?></option>
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
                      <label for="February">September</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww37">WW37</label>
                      <select class="form-control" name="ww37">
                        <option value="<?= $preventive_maintenance_form['ww37']; ?>"><?= $preventive_maintenance_form['ww37']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww38">WW38</label>
                      <select class="form-control" name="ww38">
                        <option value="<?= $preventive_maintenance_form['ww38']; ?>"><?= $preventive_maintenance_form['ww38']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww39">WW39</label>
                      <select class="form-control" name="ww39">
                        <option value="<?= $preventive_maintenance_form['ww39']; ?>"><?= $preventive_maintenance_form['ww39']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww40">WW40</label>
                      <select class="form-control" name="ww40">
                        <option value="<?= $preventive_maintenance_form['ww40']; ?>"><?= $preventive_maintenance_form['ww40']; ?></option>
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
                      <label for="February">October</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww40_1">WW40</label>
                      <select class="form-control" name="ww40_1">
                        <option value="<?= $preventive_maintenance_form['ww40_1']; ?>"><?= $preventive_maintenance_form['ww40_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww41">WW41</label>
                      <select class="form-control" name="ww41">
                        <option value="<?= $preventive_maintenance_form['ww41']; ?>"><?= $preventive_maintenance_form['ww41']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww42">WW42</label>
                      <select class="form-control" name="ww42">
                        <option value="<?= $preventive_maintenance_form['ww42']; ?>"><?= $preventive_maintenance_form['ww42']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww43">WW43</label>
                      <select class="form-control" name="ww43">
                        <option value="<?= $preventive_maintenance_form['ww43']; ?>"><?= $preventive_maintenance_form['ww43']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww44">WW44</label>
                      <select class="form-control" name="ww44">
                        <option value="<?= $preventive_maintenance_form['ww44']; ?>"><?= $preventive_maintenance_form['ww44']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww45">WW45</label>
                      <select class="form-control" name="ww45">
                        <option value="<?= $preventive_maintenance_form['ww45']; ?>"><?= $preventive_maintenance_form['ww45']; ?></option>
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
                      <label for="February">November</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww45_1">WW45</label>
                      <select class="form-control" name="ww45_1">
                        <option value="<?= $preventive_maintenance_form['ww45_1']; ?>"><?= $preventive_maintenance_form['ww45_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww46">WW46</label>
                      <select class="form-control" name="ww46">
                        <option value="<?= $preventive_maintenance_form['ww46']; ?>"><?= $preventive_maintenance_form['ww46']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww47">WW47</label>
                      <select class="form-control" name="ww47">
                        <option value="<?= $preventive_maintenance_form['ww47']; ?>"><?= $preventive_maintenance_form['ww47']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww48">WW48</label>
                      <select class="form-control" name="ww48">
                        <option value="<?= $preventive_maintenance_form['ww48']; ?>"><?= $preventive_maintenance_form['ww48']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww49">WW49</label>
                      <select class="form-control" name="ww49">
                        <option value="<?= $preventive_maintenance_form['ww49']; ?>"><?= $preventive_maintenance_form['ww49']; ?></option>
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
                      <label for="February">December</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww49_1">WW49</label>
                      <select class="form-control" name="ww49_1">
                        <option value="<?= $preventive_maintenance_form['ww49_1']; ?>"><?= $preventive_maintenance_form['ww49_1']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww50">WW50</label>
                      <select class="form-control" name="ww50">
                        <option value="<?= $preventive_maintenance_form['ww50']; ?>"><?= $preventive_maintenance_form['ww50']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww51">WW51</label>
                      <select class="form-control" name="ww51">
                        <option value="<?= $preventive_maintenance_form['ww51']; ?>"><?= $preventive_maintenance_form['ww51']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww52">WW52</label>
                      <select class="form-control" name="ww52">
                        <option value="<?= $preventive_maintenance_form['ww52']; ?>"><?= $preventive_maintenance_form['ww52']; ?></option>
                        <option value="D">D</option>
                        <option value="P/C">P/C</option>
                        <option value="P">P</option>
                        <option value="U/R">U/R</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="ww53">WW53</label>
                      <select class="form-control" name="ww53">
                        <option value="<?= $preventive_maintenance_form['ww53']; ?>"><?= $preventive_maintenance_form['ww53']; ?></option>
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
