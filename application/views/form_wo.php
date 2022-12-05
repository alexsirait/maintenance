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
                    <form class="" action="" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Order by</label>
                                    <input type="text" class="form-control" name="date" placeholder="Order by . . ." required>
                                    <small class="form-text text-danger danger"><?= form_error('date'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">Day, Date & Time</label>
                                    <input type="date" class="form-control" name="job_description" required>
                                    <small class="form-text text-danger danger"><?= form_error('applicable_job'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">WO Received by</label>
                                    <input type="text" class="form-control" name="job_description" placeholder="WO Received by . . ." required>
                                    <small class="form-text text-danger danger"><?= form_error('applicable_job'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">Day, Date & Time</label>
                                    <input type="date" class="form-control" name="job_description" required>
                                    <small class="form-text text-danger danger"><?= form_error('applicable_job'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Order Description :</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="11" placeholder="Order Description . . ." required></textarea>
                                    <small class="form-text text-danger danger"><?= form_error('applicable_job'); ?></small>
                                </div>
                            </div>
                        </div>
                        <h5 style="white-space:nowrap;" class="text-center font-weight-bold mt-3">MAINTENANCE REPORT</h5>
                        <div class="form-row mt-4">
                            <div class="form-group col-md-6">
                                <label for="date">Machine & Tag No.</label>
                                <input type="text" class="form-control" name="date" placeholder="Machine & Tag No . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('date'); ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Start Repair</label>
                                <input type="text" class="form-control" name="date" placeholder="Start Repair . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('date'); ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Serial No</label>
                                <input type="text" class="form-control" name="date" placeholder="Serial No . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('date'); ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Completed Repair</label>
                                <input type="text" class="form-control" name="date" placeholder="Completed Repair . . ." required>
                                <small class="form-text text-danger danger"><?= form_error('date'); ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Detail of Problem :</label>
                            <textarea id="criminal_desc" name="position_profile" cols="40" rows="5" class="form-control mb-3" placeholder="Detail of Problem . . ." required></textarea>
                        </div>
                        <div class="form-row">
                            <label>Root Cause :</label>
                            <textarea id="criminal_desc" name="position_profile" cols="40" rows="5" class="form-control mb-3" placeholder="Root Cause . . ." required></textarea>
                        </div>
                        <div class="form-row">
                            <label>Corrective Action :</label>
                            <textarea id="criminal_desc" name="position_profile" cols="40" rows="5" class="form-control mb-3" placeholder="Corrective Action . . ." required></textarea>
                        </div>
                        <div class="form-row">
                            <label>Preventive Action :</label>
                            <textarea id="criminal_desc" name="position_profile" cols="40" rows="5" class="form-control mb-3" placeholder="Preventive Action . . ." required></textarea>
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
                                        <td><input type="text" class="form-control" placeholder="Part Description . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Part No . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Qty . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Remarks . . ." required></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" placeholder="Part Description . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Part No . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Qty . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Remarks . . ." required></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" placeholder="Part Description . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Part No . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Qty . . ." required></td>
                                        <td><input type="text" class="form-control" placeholder="Remarks . . ." required></td>
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
                                        <td><input type="file" class="form-control" required></td>
                                        <td><input type="file" class="form-control" required></td>
                                        <td><input type="file" class="form-control" required></td>
                                        <td colspan="2"><input type="file" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" placeholder="Name & Sign" required></td>
                                        <td><input type="text" class="form-control" placeholder="Name & Sign of Technician" required></td>
                                        <td><input type="text" class="form-control" placeholder="Name & Sign" required></td>
                                        <td colspan="2"><input type="text" class="form-control" placeholder="Name sign of User" required></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
                <div class="card-footer">Note : Test the Machine after repaired</div>
            </div>
            <i class="fal fa-browser"></i>
        <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>