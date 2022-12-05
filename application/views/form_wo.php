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
        <div class="card mx-auto" style="width: 90%;">
          <h5 class="card-header text-center">MAINTENANCE WORK ORDER</h5>
          <div class="card-body">
          <!-- mulai disini -->
            <form action="#" method="POST">
              <table class="table table-bordered table-responsive">
                <tbody>
                  <tr>
                    <td class="w-25" colspan="2">Work Order No.</td>
                    <td colspan="3" rowspan="1" class="border-bottom-0">Order Description :</td>
                  </tr>
                  <tr>
                    <td class="w-25" colspan="1">Order by</td>
                    <td class="w-25" colspan="1"><input type="text" class="form-control"></td>
                    <td class="w-25" rowspan="4" colspan="3" class="border-top-0"><textarea class="form-control" cols="30" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="1">Day, Date & Time</td>
                    <td colspan="1"><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="1">WO Received by</td>
                    <td colspan="1"><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="1">Day, Date & Time</td>
                    <td colspan="1"><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td class="text-center" colspan="5">MAINTENANCE REPORT</td>
                  </tr>
                  <tr>
                    <td colspan="1">Machine & Tag No.</td>
                    <td colspan="1"><input type="text" class="form-control"></td>
                    <td colspan="1">Start Repair</td>
                    <td colspan="2"><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="1">Serial No</td>
                    <td colspan="1"><input type="text" class="form-control"></td>
                    <td colspan="1">Completed Repair</td>
                    <td colspan="2"><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="5">Detail of Problem :</td>
                  </tr>
                  <tr>
                    <td colspan="5"><textarea class="form-control" cols="30" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="5">Root Cause :</td>
                  </tr>
                  <tr>
                    <td colspan="5"><textarea class="form-control" cols="30" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="5">Corrective Action :</td>
                  </tr>
                  <tr>
                    <td colspan="5"><textarea class="form-control" cols="30" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="5">Preventive Action :</td>
                  </tr>
                  <tr>
                    <td colspan="5"><textarea class="form-control" cols="30" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="5" class="text-center">PARTS REPLACEMENT</td>
                  </tr>
                  <tr>
                    <td>No</td>
                    <td>Part Description</td>
                    <td>Part No.</td>
                    <td>Qty</td>
                    <td>Remarks</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="5" class="text-center">WO CLOSING SIGNATURES</td>
                  </tr>
                  <tr>
                    <td rowspan="2" class="text-center">Ordered by</td>
                    <td rowspan="2" class="text-center">Repaired by</td>
                    <td colspan="3" class="text-center">Approval For Used</td>
                  </tr>
                  <tr>
                    <td class="text-center">By Head Production</td>
                    <td colspan="2" class="text-center">By Head Maintenance</td>
                  </tr>
                  <tr>
                    <td><input type="file" class="form-control"></td>
                    <td><input type="file" class="form-control"></td>
                    <td><input type="file" class="form-control"></td>
                    <td colspan="2"><input type="file" class="form-control"></td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" placeholder="Name & Sign"></td>
                    <td><input type="text" class="form-control" placeholder="Name & Sign of Technician"></td>
                    <td><input type="text" class="form-control" placeholder="Name & Sign"></td>
                    <td colspan="2"><input type="text" class="form-control" placeholder="Name sign of User"></td>
                  </tr>
                  <tr>
                    <td colspan="5">Note : Test the Machine after repaired</td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
        <!-- akhir disini -->
      </div>
    </section>
  </div>
</body>
</html>
