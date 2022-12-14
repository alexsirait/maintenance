<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard | Maintenance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
        <div class="alert alert-info">
            <h4>
              <center>
                <strong>--- Cladtek | Maintenance ---</strong> 
              </center>         
            </h4>
            <div class="px-2 bg-light ">
                <marquee class="py-3">Welcome To Cladtek Maintenance</marquee>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $equipment_form ?></h3>
                <p>Master List of Equipment</p>
              </div>
              <div class="icon">
                <i class="ml-1 far fa-file-alt"></i>
              </div>
              <a href="<?php echo base_url(); ?>Dashboard/checkreport_equipment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $preventive_maintenance_form ?></h3>
                <p>Planned Preventive Maintenance</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>Dashboard/checkreport_preventive_january" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $apaajalaa ?> %</h3>
                <p>Actual PPM</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-table"></i>
              </div>
              <a href="<?php echo base_url(); ?>Dashboard/PPMvsActual" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $wo_form ?></h3>
                <p>Work Order E</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>Report_Wo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Actual vs PPM
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Start Chart -->                  
                  <div id="chartContainer1" style="height: 300px; width: 100%; position: relative;"></div>                  
                  <!-- End Chart -->
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="<?php echo base_url(); ?>Dashboard/checkreport_equipment" class="dropdown-item">Add new Equipment</a>
                      <a href="<?php echo base_url(); ?>Dashboard/checkreport_equipment" class="dropdown-item">Clear List of Equipment</a>
                      <div class="dropdown-divider"></div>
                      <a href="<?php echo base_url(); ?>Dashboard/checkreport_preventive" class="dropdown-item">View Planned</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Map card -->
            <div class="card bg-gradient-primary" hidden>
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">PPM vs Actual</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">    

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Cladtek Maintenance
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!-- Start Chart -->
                <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                <!-- End Chart -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-6 text-center">
                    <input type="text" class="knob" data-readonly="true" value="<?= $hsumpretentive_calibration ?>" data-width="60" data-height="60" data-fgColor="#39CCCC">
                    <div class="text-white">Preventive & Calibration</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <input type="text" class="knob" data-readonly="true" value="<?= $hsumppm ?>" data-width="60" data-height="60" data-fgColor="#39CCCC">
                    <div class="text-white">Preventive</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script>
    window.onload = function () {

    var chart1 = new CanvasJS.Chart("chartContainer1", {
      animationEnabled: true,
      theme: "light2",
      title:{
        text: "Actual vs PPM"
      },	
      axisY: {
        title: "",
        titleFontColor: "#4F81BC",
        lineColor: "#4F81BC",
        labelFontColor: "#4F81BC",
        tickColor: "#4F81BC"
      },
      axisY2: {
        title: "",
        titleFontColor: "#C0504E",
        lineColor: "#C0504E",
        labelFontColor: "#C0504E",
        tickColor: "#C0504E"
      },	
      toolTip: {
        shared: true
      },
      legend: {
        cursor:"pointer",
        itemclick: toggleDataSeries1
      },
      data: [{
        type: "column",
        name: "Actual",
        legendText: "Actual",
        showInLegend: true, 
        dataPoints:[
          { label: "January", y: <?= $hjanuary ?> },
          { label: "February", y: <?= $hfebruary ?> },
          { label: "March", y: <?= $hmarch ?> },
          { label: "April", y: <?= $hapril ?> },
          { label: "May", y: <?= $hmay ?> },
          { label: "June", y: <?= $hjune ?> },
          { label: "July", y: <?= $hjuly ?> },
          { label: "August", y: <?= $haugust ?> },
          { label: "September", y: <?= $hseptember ?> },
          { label: "October", y: <?= $hoctober ?> },
          { label: "November", y: <?= $hnovember ?> },
          { label: "December", y: <?= $hdecember ?> },
        ]
      },
      {
        type: "column",	
        name: "Preventive",
        legendText: "Preventive",
        axisYType: "secondary",
        showInLegend: true,
        dataPoints:[
          { label: "January", y: <?= $hjanuary_ppm ?> },
          { label: "February", y: <?= $hfebruary_ppm ?> },
          { label: "March", y: <?= $hmarch_ppm ?> },
          { label: "April", y: <?= $hapril_ppm ?> },
          { label: "May", y: <?= $hmay_ppm ?> },
          { label: "June", y: <?= $hjune_ppm ?> },
          { label: "July", y: <?= $hjuly_ppm ?> },
          { label: "August", y: <?= $haugust_ppm ?> },
          { label: "September", y: <?= $hseptember_ppm ?> },
          { label: "October", y: <?= $hoctober_ppm ?> },
          { label: "November", y: <?= $hnovember_ppm ?> },
          { label: "December", y: <?= $hdecember_ppm ?> },
        ]
      }]
    });

    var chart2 = new CanvasJS.Chart("chartContainer2", {
    theme:"light2",
    animationEnabled: true,
    title:{
      text: "PPM vs Actual"
    },
    axisY :{
      title: "Number of PPM",
      suffix: ""
    },
    toolTip: {
      shared: "true"
    },
    legend:{
      cursor:"pointer",
      itemclick : toggleDataSeries2
    },
    data: [{
      type: "spline",
      visible: true,
      showInLegend: true,
      yValueFormatString: "##0",
      name: "Actual",
      dataPoints: [
        { label: "January", y: <?= $hjanuary ?> },
        { label: "February", y: <?= $hfebruary ?> },
        { label: "March", y: <?= $hmarch ?> },
        { label: "April", y: <?= $hapril ?> },
        { label: "May", y: <?= $hmay ?> },
        { label: "June", y: <?= $hjune ?> },
        { label: "July", y: <?= $hjuly ?> },
        { label: "August", y: <?= $haugust ?> },
        { label: "September", y: <?= $hseptember ?> },
        { label: "October", y: <?= $hoctober ?> },
        { label: "November", y: <?= $hnovember ?> },
        { label: "December", y: <?= $hdecember ?> }
      ]
    },
    {
      type: "spline", 
      showInLegend: true,
      visible: true,
      yValueFormatString: "##0",
      name: "Preventive",
      dataPoints: [
        { label: "January", y: <?= $hjanuary_ppm ?> },
        { label: "February", y: <?= $hfebruary_ppm ?> },
        { label: "March", y: <?= $hmarch_ppm ?> },
        { label: "April", y: <?= $hapril_ppm ?> },
        { label: "May", y: <?= $hmay_ppm ?> },
        { label: "June", y: <?= $hjune_ppm ?> },
        { label: "July", y: <?= $hjuly_ppm ?> },
        { label: "August", y: <?= $haugust_ppm ?> },
        { label: "September", y: <?= $hseptember_ppm ?> },
        { label: "October", y: <?= $hoctober_ppm ?> },
        { label: "November", y: <?= $hnovember_ppm ?> },
        { label: "December", y: <?= $hdecember_ppm ?> }
      ]
    },
    {
      type: "spline",
      visible: true,
      showInLegend: true,
      yValueFormatString: "##0",
      name: "Preventive Calibration",
      dataPoints: [
        { label: "January", y: <?= $hjanuary_ppm_c ?> },
        { label: "February", y: <?= $hfebruary_ppm_c ?> },
        { label: "March", y: <?= $hmarch_ppm_c ?> },
        { label: "April", y: <?= $hapril_ppm_c ?> },
        { label: "May", y: <?= $hmay_ppm_c ?> },
        { label: "June", y: <?= $hjune_ppm_c ?> },
        { label: "July", y: <?= $hjuly_ppm_c ?> },
        { label: "August", y: <?= $haugust_ppm_c ?> },
        { label: "September", y: <?= $hseptember_ppm_c ?> },
        { label: "October", y: <?= $hoctober_ppm_c ?> },
        { label: "November", y: <?= $hnovember_ppm_c ?> },
        { label: "December", y: <?= $hdecember_ppm_c ?> }
      ]
    }]
  });

  chart1.render();

  chart2.render();

  function toggleDataSeries1(e) {
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
      e.dataSeries.visible = false;
    }
    else {
      e.dataSeries.visible = true;
    }
    chart1.render();
  }

  function toggleDataSeries2(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
      e.dataSeries.visible = false;
    } else {
      e.dataSeries.visible = true;
    }
    chart.render();
  }

  }
  </script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/chart.js/canvasjs.min.js"></script>