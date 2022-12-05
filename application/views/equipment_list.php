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
          <div class="card-body">
          <div class="row pl-2 mb-2">	
            <a class="btn btn-primary float-right" href="<?php echo base_url(); ?>dashboard/add_equipment" style="color:black"><b>Add Data</b></a>
          </div>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <tr>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>						
                          <td align=center></td>														
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                          <td align=center></td>
                        </tr>
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
