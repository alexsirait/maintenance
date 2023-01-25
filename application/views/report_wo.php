<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REPORT MAINTENANCE WORK ORDER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Report Work Order</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- mulai disini -->
        <a href="<?= base_url("form_wo"); ?>" class="btn btn-primary mb-2"><i class="fas fa-fw fa-file-alt"></i> Work Order Form</a>
        <?php if ($this->session->flashdata('add_success')) { ?>
            <div class="alert alert-success"> <?= $this->session->flashdata('add_success') ?> </div>
        <?php } ?>
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="dataTable1" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th style="white-space:nowrap;" class="text-center">No.</th>
                        <th style="white-space:nowrap;" class="text-center">Maintenance Work Order</th>
                        <th style="white-space:nowrap;" class="text-center">Order Description</th>
                        <th style="white-space:nowrap;" class="text-center">Machine & Tag No.</th>
                        <th style="white-space:nowrap;" class="text-center">Start Repair</th>
                        <th style="white-space:nowrap;" class="text-center">Serial No.</th>
                        <th style="white-space:nowrap;" class="text-center">Completed Repair</th>
                        <th style="white-space:nowrap;" class="text-center">Detail of Problem</th>
                        <th style="white-space:nowrap;" class="text-center">Root Cause</th>
                        <th style="white-space:nowrap;" class="text-center">Corrective Action</th>
                        <th style="white-space:nowrap;" class="text-center">Preventive Action</th>
                        <th style="white-space:nowrap;" class="text-center">Parts Replacement</th>
                        <!-- <th style="white-space:nowrap;" class="text-center">Sign. Ordered by</th>
                        <th style="white-space:nowrap;" class="text-center">Sign. Repaired by</th>
                        <th style="white-space:nowrap;" class="text-center">Sign. Head Production</th>
                        <th style="white-space:nowrap;" class="text-center">Sign. Head Maintenance</th> -->
                        <th style="white-space:nowrap;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                              <?php if ($dataReport != null) : ?>
                                  <?php $i = 1;
                                      foreach ($dataReport as $row) { ?>
                                      <tr style="<?php if ($row->order_by != '' && 
                                      $row->day_date_time_order != '' && 
                                      $row->wo_received_by != '' && 
                                      $row->day_date_time_received != '' && 
                                      $row->order_description != '' && 
                                      $row->machine_tag_no != '' && 
                                      $row->start_repair != '' && 
                                      $row->serial_no != '' && 
                                      $row->completed_repair != '' && 
                                      $row->detail_problem != '' && 
                                      $row->root_cause != '' && 
                                      $row->corrective_action != '' && 
                                      $row->preventive_action != '' && 
                                      $row->part_description_1 != '' && 
                                      $row->part_description_2 != '' && 
                                      $row->part_description_3 != '' && 
                                      $row->part_no_1 != '' && 
                                      $row->part_no_2 != '' && 
                                      $row->part_no_3 != '' && 
                                      $row->qty_1 != '' && 
                                      $row->qty_2 != '' && 
                                      $row->qty_2 != '' && 
                                      $row->remarks_1 != '' && 
                                      $row->remarks_2 != '' && 
                                      $row->remarks_3 != '') { echo 'background-color: #B6E2A1'; } ?>">
                                          <td scope="row"><?= $i++; ?></td>
                                          <td style="white-space:nowrap;" class="text-center">
                                            <div class="form-row table-responsive">
                                                <table class="table table-bordered border">
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-sign-in-alt"></i></td>
                                                            <th class="text-left">Order by</th>
                                                            <td>
                                                                <span><?php echo $row->order_by; ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?php echo $row->day_date_time_order; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-sign-out-alt"></i></td>
                                                            <th class="text-left">Received by</th>
                                                            <td>
                                                                <span><?php echo $row->wo_received_by; ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?php if($row->day_date_time_received != 0) echo $row->day_date_time_received; ?></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>    
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->order_description; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->machine_tag_no; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php if($row->start_repair != 0) echo $row->start_repair; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->serial_no; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->completed_repair; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->detail_problem; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->root_cause; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->corrective_action; ?></td>
                                          <td style="white-space:nowrap;" class="text-center"><?php echo $row->preventive_action; ?></td>
                                          <td style="white-space:nowrap;" class="text-center">
                                            <div class="form-row table-responsive">
                                                <table class="table table-bordered border">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Part Description</th>
                                                            <th>Part No.</th>
                                                            <th>Qty</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <span><?= $row->part_description_1 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->part_no_1 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->qty_1 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->remarks_1 ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <span><?= $row->part_description_2 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->part_no_2 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->qty_2 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->remarks_2 ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <span><?= $row->part_description_3 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->part_no_3 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->qty_3 ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= $row->remarks_3 ?></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                          <!-- <td style="white-space:nowrap;" class="text-center">
                                              <?php if ($row->ordered_by != null || $row->ordered_by != '') { ?>
                                                  <img src="<?= base_url(); ?>uploads/signature/<?= $row->ordered_by; ?>" alt="<?= $row->ordered_by; ?>" width="100" height="110">
                                                  <div class="text-sm"><?php echo $row->ordered_by_name; ?></div>
                                              <?php } else { ?>
                                                  <i class="fas fa-signature"></i>
                                              <?php } ?>
                                          </td>
                                          <td style="white-space:nowrap;" class="text-center">
                                              <?php if ($row->repaired_by != null || $row->repaired_by != '') { ?>
                                                  <img src="<?= base_url(); ?>uploads/signature/<?= $row->repaired_by; ?>" alt="<?= $row->repaired_by; ?>" width="100" height="110">
                                                  <div class="text-sm"><?php echo $row->repaired_by; ?></div>
                                              <?php } else { ?>
                                                  <i class="fas fa-signature"></i>
                                              <?php } ?>
                                          </td>
                                          <td style="white-space:nowrap;" class="text-center">
                                              <?php if ($row->head_production != null || $row->head_production != '') { ?>
                                                  <img src="<?= base_url(); ?>uploads/signature/<?= $row->head_production; ?>" alt="<?= $row->head_production; ?>" width="100" height="110">
                                                  <div class="text-sm"><?php echo $row->head_production_name; ?></div>
                                              <?php } else { ?>
                                                  <i class="fas fa-signature"></i>
                                              <?php } ?>
                                          </td>
                                          <td style="white-space:nowrap;" class="text-center">
                                              <?php if ($row->head_maintenance != null || $row->head_maintenance != '') { ?>
                                                  <img src="<?= base_url(); ?>uploads/signature/<?= $row->head_maintenance; ?>" alt="<?= $row->head_maintenance; ?>" width="100" height="110">
                                                  <div class="text-sm"><?php echo $row->head_maintenance_name; ?></div>
                                              <?php } else { ?>
                                                  <i class="fas fa-signature"></i>
                                              <?php } ?>
                                          </td> -->
                                          <td style="white-space:nowrap;" class="text-center">
                                                <a class="btn btn-warning w-100 mb-1" href="<?php echo base_url(); ?>form_wo/edit_form/<?php echo $row->id; ?>"><i class="fas fa-edit"></i></a>
                                                <div onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><a href="<?php echo base_url(); ?>form_wo/delete_form/<?php echo $row->id; ?>" class="btn btn-danger mb-1 w-100"><i class="fas fa-trash-alt"></i></a></div>
                                                <div><a target="_blank" class="btn btn-success mb-1 w-100" href="https://api.whatsapp.com/send?phone=<?= $user['gm_phone'];?>&text=Hi,%20This%20is%20a%20message%20from%20the%20Maintenance%20System."><i class="fab fa-whatsapp"></i></a></div>
                                          </td>
                                      </tr>
                                  <?php } ?>
                              <?php endif; ?>
                          </tbody>

                    <?php if (empty($dataReport)) : ?>
                        <div class="alert alert-info" role="alert">
                        Data Is Empty ! 🗑️
                        </div>
                    <?php endif; ?>
                </table>
            </div>
        <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>