  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actual PPM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Actual PPM</li>
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
            <h6 class="m-0 font-weight-bold text-primary">Actual PPM</h6>
          </div>                    
          <div class="card-body col-sm-12">
          <?= $this->session->flashdata('flash');  ?>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th style="white-space:nowrap;" class="text-center"><b>Preventive Done</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Preventive & Calibration</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Preventive</b></th>
                          <th style="white-space:nowrap;" class="text-center"><b>Under Repair</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; { ?>
                        <tr>
                          <td align=center style="white-space:nowrap;"><?php foreach ($bobi as $b) { ?><p><?= $b['total'] ?></p><?php } ?></td>
                          <td align=center style="white-space:nowrap;"><?php foreach ($bobi2 as $b) { ?><p><?= $b['total'] ?></p><?php } ?></td>
                          <td align=center style="white-space:nowrap;"><?php foreach ($bobi4 as $b) { ?><p><?= $b['total'] ?></p><?php } ?></td>
                          <td align=center style="white-space:nowrap;"><?php foreach ($bobi3 as $b) { ?><p><?= $b['total'] ?></p><?php } ?></td>
                        </tr>
                      </tbody>
                      <?php } ?>
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
