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
            <h6 class="m-0 font-weight-bold text-primary">Planned Preventive Maintenance February</h6>
          </div>          
          <div class="card-body col-sm-12">
            <?= $this->session->flashdata('flash'); ?>            
            <div class="dropdown">
              <div class="mb-2 mr-2" style="float: left;">	
                <a class="btn btn-primary float-right" href="<?php echo base_url(); ?>dashboard/add_maintenance_february" style="color:black"><i class="fas fa-plus"></i> <b>Add Data</b></a>
              </div>
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monthly Filter 
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_january">January</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Dashboard/checkreport_preventive_february">February</a>
                <a class="dropdown-item" href="#">March</a>
                <a class="dropdown-item" href="#">April</a>
                <a class="dropdown-item" href="#">May</a>
                <a class="dropdown-item" href="#">June</a>
                <a class="dropdown-item" href="#">July</a>
                <a class="dropdown-item" href="#">August</a>
                <a class="dropdown-item" href="#">September</a>
                <a class="dropdown-item" href="#">October</a>
                <a class="dropdown-item" href="#">November</a>
                <a class="dropdown-item" href="#">December</a>
              </div>
            </div>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th style="white-space:nowrap;" class="text-center" colspan="3"><b>Month</b></th>
                          <th style="white-space:nowrap;" class="text-center" colspan="32"><b>january</th>
                          <!-- <th style="white-space:nowrap;" class="text-center" colspan="29"><b>February</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="31"><b>March</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="30"><b>April</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="31"><b>May</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="30"><b>June</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="31"><b>July</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="30"><b>August</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="31"><b>September</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="30"><b>October</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="31"><b>November</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="30"><b>December</th> -->
                        </tr>
                        <tr>
                          <td align=center style="white-space:nowrap;" rowspan="3">No</td>
                          <td align=center style="white-space:nowrap;" rowspan="3">Machine</td>
                          <td align=center style="white-space:nowrap;" rowspan="3">Description Machine</td>
                          <td align=center style="white-space:nowrap;" colspan="4">WW-01</td>
                          <td align=center style="white-space:nowrap;" colspan="7">WW-02</td>
                          <td align=center style="white-space:nowrap;" colspan="7">WW-03</td>
                          <td align=center style="white-space:nowrap;" colspan="7">WW-04</td>
                          <td align=center style="white-space:nowrap;" colspan="3">WW-05</td>                          
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
                        </tr>
                      </thead>
                      <tbody>
                      <?php if ($preventive_maintenance_form_february != null) : ?>
                      <?php $i = 1;
                        foreach ($preventive_maintenance_form_february as $item) { ?>
                        <tr>
                          <td scope="row" align=center style="white-space:nowrap;" style="white-space:nowrap;"><?= $i++; ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['machine'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['description'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww01_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww01_2'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww01_3'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww01_4'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_5'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_6'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_7'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_8'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_9'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_10'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww02_11'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_12'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_13'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_14'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_15'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_16'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_17'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_18'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww03_19'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww04_20'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww04_21'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww04_22'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww04_23'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww04_24'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww04_25'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww05_26'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww05_27'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww05_28'] ?></td>
                          <td align=center style="white-space:nowrap;">
                            <a class="btn btn-info btn-sm m-1" href="<?= base_url(); ?>Dashboard/ubah_preventive_february/<?= $item['id']?>" style="color: black"><i class="fas fa-solid fa-pencil-alt"></i></a>
                            <a href="<?= base_url() ?>Dashboard/deleteReportPreventiveFebruary/<?= $item['id']?>" onclick="return confirm('Hapus?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
