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
            <h6 class="m-0 font-weight-bold text-primary">Planned Preventive Maintenance March</h6>
          </div>          
          <div class="card-body col-sm-12">
            <?= $this->session->flashdata('flash'); ?>            
            <div class="dropdown">
              <div class="mb-2 mr-2" style="float: left;">	
                <a class="btn btn-primary float-right" href="<?php echo base_url(); ?>dashboard/add_maintenance_march" style="color:black"><i class="fas fa-plus"></i> <b>Add Data</b></a>
              </div>
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monthly Filter 
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_january">January</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_february">February</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_march">March</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_april">April</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_may">May</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_june">June</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_july">July</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_august">August</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_september">September</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_october">October</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_november">November</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_december">December</a>
              </div>
            </div>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th style="white-space:nowrap;" class="text-center" colspan="3"><b>Month</b></th>
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="32"><b>january</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="29"><b>February</th> -->
                          <th style="white-space:nowrap;" class="text-center" colspan="32"><b>March</th>
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="30"><b>April</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="31"><b>May</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="30"><b>June</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="31"><b>July</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="30"><b>August</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="31"><b>September</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="30"><b>October</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="31"><b>November</th> -->
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="30"><b>December</th> -->
                        </tr>
                        <tr>
                          <td align=center style="white-space:nowrap;" rowspan="3">No</td>
                          <td align=center style="white-space:nowrap;" rowspan="3">Machine</td>
                          <td align=center style="white-space:nowrap;" rowspan="3">Description Machine</td>
                          <td align=center style="white-space:nowrap;" colspan="4">WW-01</td>
                          <td align=center style="white-space:nowrap;" colspan="7">WW-02</td>
                          <td align=center style="white-space:nowrap;" colspan="7">WW-03</td>
                          <td align=center style="white-space:nowrap;" colspan="7">WW-04</td>
                          <td align=center style="white-space:nowrap;" colspan="6">WW-05</td>                          
                          <td align=center style="white-space:nowrap;" rowspan="3">Action</td>                       
                        </tr>
                        <tr>                          
                          <td align=center style="white-space:nowrap;">Wed</td>
                          <td align=center style="white-space:nowrap;">Thu</td>
                          <td align=center style="white-space:nowrap;">Fri</td>
                          <td align=center style="white-space:nowrap;">Sat</td>
                          <td align=center style="white-space:nowrap;">Sun</td>
                          <td align=center style="white-space:nowrap;">Mon</td>
                          <td align=center style="white-space:nowrap;">Tue</td>
                          <td align=center style="white-space:nowrap;">Wed</td>
                          <td align=center style="white-space:nowrap;">Thu</td>
                          <td align=center style="white-space:nowrap;">Fri</td>
                          <td align=center style="white-space:nowrap;">Sat</td>
                          <td align=center style="white-space:nowrap;">Sun</td>
                          <td align=center style="white-space:nowrap;">Mon</td>
                          <td align=center style="white-space:nowrap;">Tue</td>
                          <td align=center style="white-space:nowrap;">Wed</td>
                          <td align=center style="white-space:nowrap;">Thu</td>
                          <td align=center style="white-space:nowrap;">Fri</td>
                          <td align=center style="white-space:nowrap;">Sat</td>
                          <td align=center style="white-space:nowrap;">Sun</td>
                          <td align=center style="white-space:nowrap;">Mon</td>
                          <td align=center style="white-space:nowrap;">Tue</td>
                          <td align=center style="white-space:nowrap;">Wed</td>
                          <td align=center style="white-space:nowrap;">Thu</td>
                          <td align=center style="white-space:nowrap;">Fri</td>
                          <td align=center style="white-space:nowrap;">Sat</td>
                          <td align=center style="white-space:nowrap;">Sun</td>
                          <td align=center style="white-space:nowrap;">Mon</td>
                          <td align=center style="white-space:nowrap;">Tue</td>
                          <td align=center style="white-space:nowrap;">Wed</td>
                          <td align=center style="white-space:nowrap;">Thu</td>
                          <td align=center style="white-space:nowrap;">Fri</td>
                        </tr>
                        <tr>
                          <td align=center style="white-space:nowrap;">1</td>
                          <td align=center style="white-space:nowrap;">2</td>
                          <td align=center style="white-space:nowrap;">3</td>
                          <td align=center style="white-space:nowrap;">4</td>
                          <td align=center style="white-space:nowrap;">5</td>
                          <td align=center style="white-space:nowrap;">6</td>
                          <td align=center style="white-space:nowrap;">7</td>
                          <td align=center style="white-space:nowrap;">8</td>
                          <td align=center style="white-space:nowrap;">9</td>
                          <td align=center style="white-space:nowrap;">10</td>
                          <td align=center style="white-space:nowrap;">11</td>
                          <td align=center style="white-space:nowrap;">12</td>
                          <td align=center style="white-space:nowrap;">13</td>
                          <td align=center style="white-space:nowrap;">14</td>
                          <td align=center style="white-space:nowrap;">15</td>
                          <td align=center style="white-space:nowrap;">16</td>
                          <td align=center style="white-space:nowrap;">17</td>
                          <td align=center style="white-space:nowrap;">18</td>
                          <td align=center style="white-space:nowrap;">19</td>
                          <td align=center style="white-space:nowrap;">20</td>
                          <td align=center style="white-space:nowrap;">21</td>
                          <td align=center style="white-space:nowrap;">22</td>
                          <td align=center style="white-space:nowrap;">23</td>
                          <td align=center style="white-space:nowrap;">24</td>
                          <td align=center style="white-space:nowrap;">25</td>
                          <td align=center style="white-space:nowrap;">26</td>
                          <td align=center style="white-space:nowrap;">27</td>
                          <td align=center style="white-space:nowrap;">28</td>
                          <td align=center style="white-space:nowrap;">29</td>
                          <td align=center style="white-space:nowrap;">30</td>
                          <td align=center style="white-space:nowrap;">31</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if ($preventive_maintenance_form_march != null) : ?>
                      <?php $i = 1;
                        foreach ($preventive_maintenance_form_march as $item) { ?>
                        <tr>
                          <td scope="row" align=center style="white-space:nowrap;" style="white-space:nowrap;"><?= $i++; ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['machine'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['description'] ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww01_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww01_1'] . '</div>'; }elseif ($item['ww01_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_1']; } elseif ($item['ww01_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_1']; } elseif ($item['ww01_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww01_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww01_2'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww01_2'] . '</div>'; }elseif ($item['ww01_2'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_2']; } elseif ($item['ww01_2'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_2']; } elseif ($item['ww01_2'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww01_2']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww01_3'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww01_3'] . '</div>'; }elseif ($item['ww01_3'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_3']; } elseif ($item['ww01_3'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_3']; } elseif ($item['ww01_3'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww01_3']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww01_4'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww01_4'] . '</div>'; }elseif ($item['ww01_4'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_4']; } elseif ($item['ww01_4'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01_4']; } elseif ($item['ww01_4'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww01_4']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_5'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_5'] . '</div>'; }elseif ($item['ww02_5'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_5']; } elseif ($item['ww02_5'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_5']; } elseif ($item['ww02_5'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_5']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_6'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_6'] . '</div>'; }elseif ($item['ww02_6'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_6']; } elseif ($item['ww02_6'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_6']; } elseif ($item['ww02_6'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_6']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_7'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_7'] . '</div>'; }elseif ($item['ww02_7'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_7']; } elseif ($item['ww02_7'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_7']; } elseif ($item['ww02_7'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_7']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_8'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_8'] . '</div>'; }elseif ($item['ww02_8'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_8']; } elseif ($item['ww02_8'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_8']; } elseif ($item['ww02_8'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_8']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_9'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_9'] . '</div>'; }elseif ($item['ww02_9'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_9']; } elseif ($item['ww02_9'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_9']; } elseif ($item['ww02_9'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_9']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_10'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_10'] . '</div>'; }elseif ($item['ww02_10'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_10']; } elseif ($item['ww02_10'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_10']; } elseif ($item['ww02_10'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_10']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02_11'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02_11'] . '</div>'; }elseif ($item['ww02_11'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_11']; } elseif ($item['ww02_11'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02_11']; } elseif ($item['ww02_11'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02_11']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_12'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_12'] . '</div>'; }elseif ($item['ww03_12'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_12']; } elseif ($item['ww03_12'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_12']; } elseif ($item['ww03_12'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_12']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_13'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_13'] . '</div>'; }elseif ($item['ww03_13'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_13']; } elseif ($item['ww03_13'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_13']; } elseif ($item['ww03_13'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_13']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_14'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_14'] . '</div>'; }elseif ($item['ww03_14'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_14']; } elseif ($item['ww03_14'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_14']; } elseif ($item['ww03_14'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_14']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_15'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_15'] . '</div>'; }elseif ($item['ww03_15'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_15']; } elseif ($item['ww03_15'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_15']; } elseif ($item['ww03_15'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_15']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_16'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_16'] . '</div>'; }elseif ($item['ww03_16'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_16']; } elseif ($item['ww03_16'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_16']; } elseif ($item['ww03_16'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_16']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_17'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_17'] . '</div>'; }elseif ($item['ww03_17'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_17']; } elseif ($item['ww03_17'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_17']; } elseif ($item['ww03_17'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_17']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03_18'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03_18'] . '</div>'; }elseif ($item['ww03_18'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_18']; } elseif ($item['ww03_18'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03_18']; } elseif ($item['ww03_18'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03_18']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_19'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_19'] . '</div>'; }elseif ($item['ww04_19'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_19']; } elseif ($item['ww04_19'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_19']; } elseif ($item['ww04_19'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_19']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_20'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_20'] . '</div>'; }elseif ($item['ww04_20'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_20']; } elseif ($item['ww04_20'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_20']; } elseif ($item['ww04_20'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_20']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_21'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_21'] . '</div>'; }elseif ($item['ww04_21'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_21']; } elseif ($item['ww04_21'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_21']; } elseif ($item['ww04_21'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_21']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_22'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_22'] . '</div>'; }elseif ($item['ww04_22'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_22']; } elseif ($item['ww04_22'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_22']; } elseif ($item['ww04_22'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_22']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_23'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_23'] . '</div>'; }elseif ($item['ww04_23'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_23']; } elseif ($item['ww04_23'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_23']; } elseif ($item['ww04_23'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_23']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_24'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_24'] . '</div>'; }elseif ($item['ww04_24'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_24']; } elseif ($item['ww04_24'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_24']; } elseif ($item['ww04_24'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_24']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04_25'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04_25'] . '</div>'; }elseif ($item['ww04_25'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_25']; } elseif ($item['ww04_25'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04_25']; } elseif ($item['ww04_25'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04_25']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05_26'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05_26'] . '</div>'; }elseif ($item['ww05_26'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_26']; } elseif ($item['ww05_26'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_26']; } elseif ($item['ww05_26'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05_26']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05_27'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05_27'] . '</div>'; }elseif ($item['ww05_27'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_27']; } elseif ($item['ww05_27'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_27']; } elseif ($item['ww05_27'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05_27']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05_28'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05_28'] . '</div>'; }elseif ($item['ww05_28'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_28']; } elseif ($item['ww05_28'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_28']; } elseif ($item['ww05_28'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05_28']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05_29'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05_29'] . '</div>'; }elseif ($item['ww05_29'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_29']; } elseif ($item['ww05_29'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_29']; } elseif ($item['ww05_29'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05_29']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05_30'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05_30'] . '</div>'; }elseif ($item['ww05_30'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_30']; } elseif ($item['ww05_30'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_30']; } elseif ($item['ww05_30'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05_30']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05_31'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05_31'] . '</div>'; }elseif ($item['ww05_31'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_31']; } elseif ($item['ww05_31'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05_31']; } elseif ($item['ww05_31'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05_31']; } ?></td>
                          <td align=center style="white-space:nowrap;">
                            <a class="btn btn-info btn-sm m-1" href="<?= base_url(); ?>Dashboard/ubah_preventive_march/<?= $item['id']?>" style="color: black"><i class="fas fa-solid fa-pencil-alt"></i></a>
                            <a href="<?= base_url() ?>Dashboard/deleteReportPreventiveMarch/<?= $item['id']?>" onclick="return confirm('Hapus?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>                          
                        </tr>
                        <?php } ?>
                        <?php endif; ?>                        
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
      <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>
</html>
