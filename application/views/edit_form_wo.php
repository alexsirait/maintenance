<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MAINTENANCE WORK ORDER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Form Work Order</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- mulai disini -->
            <div class="card mx-auto" style="width: 90%;">
                <h5 class="card-header text-center">MAINTENANCE WORK ORDER</h5>
                <div class="card-body">
                <?php foreach ($report as $rep) : ?>
                    <?php echo form_open_multipart('/form_wo/update_form_wo'); ?>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Order by</label>
                                    <input value="<?php echo $rep->order_by ?>" type="text" class="form-control" name="order_by" placeholder="Order by . . ." required>
                                    <input value="<?php echo $rep->id ?>" name='id' type="hidden" class='form-control' required readonly>
                                    <small class="form-text text-danger danger"><?= form_error('order_by'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">Day, Date & Time</label>
                                    <input value="<?php echo $rep->day_date_time_order ?>" type="datetime-local" class="form-control" name="day_date_time_order" required>
                                    <small class="form-text text-danger danger"><?= form_error('day_date_time_order'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">WO Received by</label>
                                    <input value="<?php echo $rep->wo_received_by ?>" type="text" class="form-control" name="wo_received_by" placeholder="WO Received by . . ." required>
                                    <small class="form-text text-danger danger"><?= form_error('wo_received_by'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">Day, Date & Time</label>
                                    <input value="<?php echo $rep->day_date_time_received ?>" type="datetime-local" class="form-control" name="day_date_time_received" required>
                                    <small class="form-text text-danger danger"><?= form_error('day_date_time_received'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Order Description :</label>
                                    <textarea class="form-control" name="order_description" id="" cols="30" rows="11" placeholder="Order Description . . ." required><?php echo $rep->order_description ?></textarea>
                                    <small class="form-text text-danger danger"><?= form_error('order_description'); ?></small>
                                </div>
                            </div>
                        </div>
                        <h5 style="white-space:nowrap;" class="text-center font-weight-bold mt-3">MAINTENANCE REPORT</h5>
                        <div class="form-row mt-4">
                            <div class="form-group col-md-6">
                                <label for="date">Machine & Tag No.</label>
                                <input value="<?php echo $rep->machine_tag_no ?>" type="text" class="form-control" name="machine_tag_no" placeholder="Machine & Tag No . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('machine_tag_no'); ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Start Repair</label>
                                <input value="<?php echo $rep->start_repair ?>" type="datetime-local" class="form-control" name="start_repair" placeholder="Start Repair . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('start_repair'); ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Serial No</label>
                                <input value="<?php echo $rep->serial_no ?>" type="text" class="form-control" name="serial_no" placeholder="Serial No . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('serial_no'); ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Completed Repair</label>
                                <input value="<?php echo $rep->completed_repair ?>" type="text" class="form-control" name="completed_repair" placeholder="Completed Repair . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('completed_repair'); ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Detail of Problem :</label>
                            <textarea id="criminal_desc" name="detail_problem" cols="40" rows="5" class="form-control" placeholder="Detail of Problem . . ." required><?php echo $rep->detail_problem ?></textarea>
                            <small class="form-text text-danger danger"><?= form_error('detail_problem'); ?></small>
                        </div>
                        <div class="form-row">
                            <label>Root Cause :</label>
                            <textarea id="criminal_desc" name="root_cause" cols="40" rows="5" class="form-control" placeholder="Root Cause . . ." required><?php echo $rep->root_cause ?></textarea>
                            <small class="form-text text-danger danger"><?= form_error('root_cause'); ?></small>
                        </div>
                        <div class="form-row">
                            <label>Corrective Action :</label>
                            <textarea id="criminal_desc" name="corrective_action" cols="40" rows="5" class="form-control" placeholder="Corrective Action . . ." required><?php echo $rep->corrective_action ?></textarea>
                            <small class="form-text text-danger danger"><?= form_error('corrective_action'); ?></small>
                        </div>
                        <div class="form-row">
                            <label>Preventive Action :</label>
                            <textarea id="criminal_desc" name="preventive_action" cols="40" rows="5" class="form-control" placeholder="Preventive Action . . ." required><?php echo $rep->preventive_action ?></textarea>
                            <small class="form-text text-danger danger"><?= form_error('preventive_action'); ?></small>
                        </div>
                        <h5 style="white-space:nowrap;" class="text-center font-weight-bold mt-3">PARTS REPLACEMENT</h5>
                        <div class="form-row mt-4 table-responsive">
                            <table class="table table-bordered">
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
                                            <input value="<?php echo $rep->part_description_1 ?>" name="part_description_1" type="text" class="form-control" placeholder="Part Description . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('part_description_1'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->part_no_1 ?>" name="part_no_1" type="text" class="form-control" placeholder="Part No . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('part_no_1'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->qty_1 ?>" name="qty_1" type="text" class="form-control" placeholder="Qty . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('qty_1'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->remarks_1 ?>" name="remarks_1" type="text" class="form-control" placeholder="Remarks . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('remarks_1'); ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input value="<?php echo $rep->part_description_2 ?>" name="part_description_2" type="text" class="form-control" placeholder="Part Description . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('part_description_2'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->part_no_2 ?>" name="part_no_2" type="text" class="form-control" placeholder="Part No . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('part_no_2'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->qty_2 ?>" name="qty_2" type="text" class="form-control" placeholder="Qty . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('qty_2'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->remarks_2 ?>" name="remarks_2" type="text" class="form-control" placeholder="Remarks . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('remarks_2'); ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <input value="<?php echo $rep->part_description_3 ?>" name="part_description_3" type="text" class="form-control" placeholder="Part Description . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('part_description_3'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->part_no_3 ?>" name="part_no_3" type="text" class="form-control" placeholder="Part No . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('part_no_3'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->qty_3 ?>" name="qty_3" type="text" class="form-control" placeholder="Qty . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('qty_3'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->remarks_3 ?>" name="remarks_3" type="text" class="form-control" placeholder="Remarks . . ." required>
                                            <small class="form-text text-danger danger"><?= form_error('remarks_3'); ?></small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h5 style="white-space:nowrap;" class="text-center font-weight-bold mt-3">WO CLOSING SIGNATURES</h5>
                        <div class="form-row mt-4 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">Ordered by</th>
                                        <th rowspan="2" class="text-center">Repaired by</th>
                                        <th colspan="3" class="text-center">Approval For Used</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">By Head Production</th>
                                        <th colspan="2" class="text-center">By Head Maintenance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php if ($rep->ordered_by == null || $rep->ordered_by == '') { ?>
                                                <input value="<?php echo $rep->ordered_by ?>" name='ordered_by' type="file" class='form-control'>
                                                <span class="form-text text-danger danger"><?php echo form_error('ordered_by'); ?></span>
                                            <?php } else { ?>
                                                <div class="text-center">
                                                    <input type="hidden" value="<?= $rep->ordered_by; ?>" name='ordered_by'>
                                                    <img src="<?= base_url(); ?>uploads/signature/<?= $rep->ordered_by; ?>" alt="<?= $rep->ordered_by; ?>" width="100" height="110">
                                                </div>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($rep->repaired_by == null || $rep->repaired_by == '') { ?>
                                                <input value="<?php echo $rep->repaired_by ?>" name='repaired_by' type="file" class='form-control'>
                                                <span class="form-text text-danger danger"><?php echo form_error('repaired_by'); ?></span>
                                            <?php } else { ?>
                                                <div class="text-center">
                                                    <input type="hidden" value="<?= $rep->repaired_by; ?>" name='repaired_by'>
                                                    <img src="<?= base_url(); ?>uploads/signature/<?= $rep->repaired_by; ?>" alt="<?= $rep->repaired_by; ?>" width="100" height="110">
                                                </div>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($rep->head_production == null || $rep->head_production == '') { ?>
                                                <input value="<?php echo $rep->head_production ?>" name='head_production' type="file" class='form-control'>
                                                <span class="form-text text-danger danger"><?php echo form_error('head_production'); ?></span>
                                            <?php } else { ?>
                                                <div class="text-center">
                                                    <input type="hidden" value="<?= $rep->head_production; ?>" name='head_production'>
                                                    <img src="<?= base_url(); ?>uploads/signature/<?= $rep->head_production; ?>" alt="<?= $rep->head_production; ?>" width="100" height="110">
                                                </div>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($rep->head_maintenance == null || $rep->head_maintenance == '') { ?>
                                                <input value="<?php echo $rep->head_maintenance ?>" name='head_maintenance' type="file" class='form-control'>
                                                <span class="form-text text-danger danger"><?php echo form_error('head_maintenance'); ?></span>
                                            <?php } else { ?>
                                                <div class="text-center">
                                                    <input type="hidden" value="<?= $rep->head_maintenance; ?>" name='head_maintenance'>
                                                    <img src="<?= base_url(); ?>uploads/signature/<?= $rep->head_maintenance; ?>" alt="<?= $rep->head_maintenance; ?>" width="100" height="110">
                                                </div>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input value="<?php echo $rep->ordered_by_name ?>" name="ordered_by_name" type="text" class="form-control" placeholder="Name & Sign" required>
                                            <small class="form-text text-danger danger"><?= form_error('ordered_by_name'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->repaired_by_name ?>" name="repaired_by_name" type="text" class="form-control" placeholder="Name & Sign of Technician" required>
                                            <small class="form-text text-danger danger"><?= form_error('repaired_by_name'); ?></small>
                                        </td>
                                        <td>
                                            <input value="<?php echo $rep->head_production_name ?>" name="head_production_name" type="text" class="form-control" placeholder="Name & Sign" required>
                                            <small class="form-text text-danger danger"><?= form_error('head_production_name'); ?></small>
                                        </td>
                                        <td colspan="2">
                                            <input value="<?php echo $rep->head_maintenance_name ?>" name="head_maintenance_name" type="text" class="form-control" placeholder="Name sign of User" required>
                                            <small class="form-text text-danger danger"><?= form_error('head_maintenance_name'); ?></small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class='mt-4 btn btn-primary float-right'>Submit <i class="fas fa-arrow-right ml-2"></i></button>
                    </form>
                    <?php endforeach ?>
                </div>
                <div class="card-footer">Note : Test the Machine after repaired</div>
            </div>
            <i class="fal fa-browser"></i>
        <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>