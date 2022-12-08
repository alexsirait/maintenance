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
            <h6 class="m-0 font-weight-bold text-primary">Masterlist of the Equipment</h6>
          </div>          
          <?= $this->session->flashdata('flash');  ?>
          <div class="card-body">
          <div class="row pl-2 mb-2">	
            <a class="btn btn-primary float-right" href="<?php echo base_url(); ?>dashboard/add_equipment" style="color:black"><b>Add Data</b></a>
          </div>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th style="white-space:nowrap;" class="text-center"><b>No</b></th>
                          <th style="white-space:nowrap;" class="text-center"><b>Code</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Machine Description</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Family Name</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Type of Machine</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Model</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Serial/Control</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Capacity</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Product</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Year</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Location</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Status</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Group</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Pic</th>
                          <th style="white-space:nowrap;" class="text-center"><b>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($equipment_form != null) : ?>
                        <?php $i = 1;
                          foreach ($equipment_form as $item) { ?>				
                        <tr>
                          <td scope="row" align=center style="white-space:nowrap;"><?= $i++; ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['code'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['machine_description'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['family_name'] ?></td>						
                          <td align=center style="white-space:nowrap;"><?= $item['type_of_machine'] ?></td>														
                          <td align=center style="white-space:nowrap;"><?= $item['model'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['serial'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['capacity'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['product'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['year'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['location'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['status'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['group'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['pic'] ?></td>                          
                          <td align=center style="white-space:nowrap;">
                            <a class="btn btn-info btn-sm m-1" href="<?= base_url(); ?>Dashboard/ubah_equipment/<?= $item['id'] ?>" style="color: black"><i class="fas fa-solid fa-pencil-alt"></i></a>
                            <a href="<?= base_url() ?>Dashboard/deleteReport/<?= $item['id'] ?>" onclick="return confirm('Hapus?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
