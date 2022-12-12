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
            <h6 class="m-0 font-weight-bold text-primary">Planned Preventive Maintenance</h6>
          </div>          
          <div class="card-body col-sm-12">
            <?= $this->session->flashdata('flash'); ?>
            <div class="mb-2" style="float: left;">	
              <a class="btn btn-primary float-right" href="<?php echo base_url(); ?>dashboard/add_maintenance" style="color:black"><i class="fas fa-plus"></i> <b>Add Data</b></a>
            </div>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th style="white-space:nowrap;" class="text-center" colspan="4"><b>Month</b></th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>january</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>February</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>March</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>April</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="6"><b>May</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>June</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>July</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>August</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="4"><b>September</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="6"><b>October</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="5"><b>November</th>
                          <th style="white-space:nowrap;" class="text-center" colspan="6"><b>December</th>
                        </tr>
                        <tr>
                          <td align=center style="white-space:nowrap;">No</td>
                          <td align=center style="white-space:nowrap;">Machine</td>
                          <td align=center style="white-space:nowrap;">Description</td>
                          <td align=center style="white-space:nowrap;">Section</td>
                          <td align=center style="white-space:nowrap;">WW01</td>
                          <td align=center style="white-space:nowrap;">WW02</td>
                          <td align=center style="white-space:nowrap;">WW03</td>
                          <td align=center style="white-space:nowrap;">WW04</td>
                          <td align=center style="white-space:nowrap;">WW05</td>
                          <td align=center style="white-space:nowrap;">WW06</td>
                          <td align=center style="white-space:nowrap;">WW07</td>
                          <td align=center style="white-space:nowrap;">WW08</td>
                          <td align=center style="white-space:nowrap;">WW09</td>
                          <td align=center style="white-space:nowrap;">WW10</td>
                          <td align=center style="white-space:nowrap;">WW10</td>
                          <td align=center style="white-space:nowrap;">WW11</td>
                          <td align=center style="white-space:nowrap;">WW12</td>
                          <td align=center style="white-space:nowrap;">WW13</td>
                          <td align=center style="white-space:nowrap;">WW14</td>
                          <td align=center style="white-space:nowrap;">WW14</td>
                          <td align=center style="white-space:nowrap;">WW15</td>
                          <td align=center style="white-space:nowrap;">WW16</td>
                          <td align=center style="white-space:nowrap;">WW17</td>
                          <td align=center style="white-space:nowrap;">WW18</td>
                          <td align=center style="white-space:nowrap;">WW18</td>
                          <td align=center style="white-space:nowrap;">WW19</td>
                          <td align=center style="white-space:nowrap;">WW20</td>
                          <td align=center style="white-space:nowrap;">WW21</td>
                          <td align=center style="white-space:nowrap;">WW22</td>
                          <td align=center style="white-space:nowrap;">WW23</td>
                          <td align=center style="white-space:nowrap;">WW23</td>
                          <td align=center style="white-space:nowrap;">WW24</td>
                          <td align=center style="white-space:nowrap;">WW25</td>
                          <td align=center style="white-space:nowrap;">WW26</td>
                          <td align=center style="white-space:nowrap;">WW27</td>
                          <td align=center style="white-space:nowrap;">WW27</td>
                          <td align=center style="white-space:nowrap;">WW28</td>
                          <td align=center style="white-space:nowrap;">WW29</td>
                          <td align=center style="white-space:nowrap;">WW30</td>
                          <td align=center style="white-space:nowrap;">WW31</td>
                          <td align=center style="white-space:nowrap;">WW32</td>
                          <td align=center style="white-space:nowrap;">WW33</td>
                          <td align=center style="white-space:nowrap;">WW34</td>
                          <td align=center style="white-space:nowrap;">WW35</td>
                          <td align=center style="white-space:nowrap;">WW36</td>
                          <td align=center style="white-space:nowrap;">WW37</td>
                          <td align=center style="white-space:nowrap;">WW38</td>
                          <td align=center style="white-space:nowrap;">WW39</td>
                          <td align=center style="white-space:nowrap;">WW40</td>
                          <td align=center style="white-space:nowrap;">WW40</td>
                          <td align=center style="white-space:nowrap;">WW41</td>
                          <td align=center style="white-space:nowrap;">WW42</td>
                          <td align=center style="white-space:nowrap;">WW43</td>
                          <td align=center style="white-space:nowrap;">WW44</td>
                          <td align=center style="white-space:nowrap;">WW45</td>
                          <td align=center style="white-space:nowrap;">WW45</td>
                          <td align=center style="white-space:nowrap;">WW46</td>
                          <td align=center style="white-space:nowrap;">WW47</td>
                          <td align=center style="white-space:nowrap;">WW48</td>
                          <td align=center style="white-space:nowrap;">WW49</td>
                          <td align=center style="white-space:nowrap;">WW49</td>
                          <td align=center style="white-space:nowrap;">WW50</td>
                          <td align=center style="white-space:nowrap;">WW51</td>
                          <td align=center style="white-space:nowrap;">WW52</td>
                          <td align=center style="white-space:nowrap;">WW53</td>                       
                          <td align=center style="white-space:nowrap;">Action</td>                       
                        </tr>
                      </thead>
                      <tbody>
                      <?php if ($preventive_maintenance_form != null) : ?>
                      <?php $i = 1;
                        foreach ($preventive_maintenance_form as $item) { ?>
                        <tr>
                          <td scope="row" align=center style="white-space:nowrap;" style="white-space:nowrap;"><?= $i++; ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['machine'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['description'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['section'] ?></td>                          
                          <td align=center style="white-space:nowrap;"><?php if($item['ww01'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww01'] . '</div>'; }elseif ($item['ww01'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01']; } elseif ($item['ww01'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww01']; } elseif ($item['ww01'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww01']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww02'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww02'] . '</div>'; }elseif ($item['ww02'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02']; } elseif ($item['ww02'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww02']; } elseif ($item['ww02'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww02']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww03'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww03'] . '</div>'; }elseif ($item['ww03'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03']; } elseif ($item['ww03'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww03']; } elseif ($item['ww03'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww03']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww04'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww04'] . '</div>'; }elseif ($item['ww04'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04']; } elseif ($item['ww04'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww04']; } elseif ($item['ww04'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww04']; } ?></td>                          
                          <td align=center style="white-space:nowrap;"><?php if($item['ww05'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww05'] . '</div>'; }elseif ($item['ww05'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05']; } elseif ($item['ww05'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww05']; } elseif ($item['ww05'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww05']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww06'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww06'] . '</div>'; }elseif ($item['ww06'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww06']; } elseif ($item['ww06'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww06']; } elseif ($item['ww06'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww06']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww07'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww07'] . '</div>'; }elseif ($item['ww07'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww07']; } elseif ($item['ww07'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww07']; } elseif ($item['ww07'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww07']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww08'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww08'] . '</div>'; }elseif ($item['ww08'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww08']; } elseif ($item['ww08'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww08']; } elseif ($item['ww08'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww08']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww09'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww09'] . '</div>'; }elseif ($item['ww09'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww09']; } elseif ($item['ww09'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww09']; } elseif ($item['ww09'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww09']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww10'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww10'] . '</div>'; }elseif ($item['ww10'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww10']; } elseif ($item['ww10'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww10']; } elseif ($item['ww10'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww10']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww10_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww10_1'] . '</div>'; }elseif ($item['ww10_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww10_1']; } elseif ($item['ww10_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww10_1']; } elseif ($item['ww10_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww10_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww11'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww11'] . '</div>'; }elseif ($item['ww11'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww11']; } elseif ($item['ww11'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww11']; } elseif ($item['ww11'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww11']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww12'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww12'] . '</div>'; }elseif ($item['ww12'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww12']; } elseif ($item['ww12'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww12']; } elseif ($item['ww12'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww12']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww13'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww13'] . '</div>'; }elseif ($item['ww13'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww13']; } elseif ($item['ww13'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww13']; } elseif ($item['ww13'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww13']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww14'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww14'] . '</div>'; }elseif ($item['ww14'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww14']; } elseif ($item['ww14'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww14']; } elseif ($item['ww14'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww14']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww14_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww14_1'] . '</div>'; }elseif ($item['ww14_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww14_1']; } elseif ($item['ww14_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww14_1']; } elseif ($item['ww14_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww14_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww15'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww15'] . '</div>'; }elseif ($item['ww15'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww15']; } elseif ($item['ww15'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww15']; } elseif ($item['ww15'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww15']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww16'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww16'] . '</div>'; }elseif ($item['ww16'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww16']; } elseif ($item['ww16'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww16']; } elseif ($item['ww16'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww16']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww17'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww17'] . '</div>'; }elseif ($item['ww17'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww17']; } elseif ($item['ww17'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww17']; } elseif ($item['ww17'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww17']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww18'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww18'] . '</div>'; }elseif ($item['ww18'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww18']; } elseif ($item['ww18'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww18']; } elseif ($item['ww18'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww18']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww18_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww18_1'] . '</div>'; }elseif ($item['ww18_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww18_1']; } elseif ($item['ww18_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww18_1']; } elseif ($item['ww18_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww18_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww19'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww19'] . '</div>'; }elseif ($item['ww19'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww19']; } elseif ($item['ww19'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww19']; } elseif ($item['ww19'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww19']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww20'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww20'] . '</div>'; }elseif ($item['ww20'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww20']; } elseif ($item['ww20'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww20']; } elseif ($item['ww20'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww20']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww21'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww21'] . '</div>'; }elseif ($item['ww21'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww21']; } elseif ($item['ww21'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww21']; } elseif ($item['ww21'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww21']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww22'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww22'] . '</div>'; }elseif ($item['ww22'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww22']; } elseif ($item['ww22'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww22']; } elseif ($item['ww22'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww22']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww23'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww23'] . '</div>'; }elseif ($item['ww23'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww23']; } elseif ($item['ww23'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww23']; } elseif ($item['ww23'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww23']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww23_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww23_1'] . '</div>'; }elseif ($item['ww23_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww23_1']; } elseif ($item['ww23_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww23_1']; } elseif ($item['ww23_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww23_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww24'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww24'] . '</div>'; }elseif ($item['ww24'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww24']; } elseif ($item['ww24'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww24']; } elseif ($item['ww24'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww24']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww25'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww25'] . '</div>'; }elseif ($item['ww25'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww25']; } elseif ($item['ww25'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww25']; } elseif ($item['ww25'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww25']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww26'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww26'] . '</div>'; }elseif ($item['ww26'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww26']; } elseif ($item['ww26'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww26']; } elseif ($item['ww26'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww26']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww27'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww27'] . '</div>'; }elseif ($item['ww27'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww27']; } elseif ($item['ww27'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww27']; } elseif ($item['ww27'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww27']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww27_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww27_1'] . '</div>'; }elseif ($item['ww27_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww27_1']; } elseif ($item['ww27_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww27_1']; } elseif ($item['ww27_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww27_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww28'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww28'] . '</div>'; }elseif ($item['ww28'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww28']; } elseif ($item['ww28'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww28']; } elseif ($item['ww28'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww28']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww29'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww29'] . '</div>'; }elseif ($item['ww29'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww29']; } elseif ($item['ww29'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww29']; } elseif ($item['ww29'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww29']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww30'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww30'] . '</div>'; }elseif ($item['ww30'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww30']; } elseif ($item['ww30'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww30']; } elseif ($item['ww30'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww30']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww31'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww31'] . '</div>'; }elseif ($item['ww31'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww31']; } elseif ($item['ww31'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww31']; } elseif ($item['ww31'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww31']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww32'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww32'] . '</div>'; }elseif ($item['ww32'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww32']; } elseif ($item['ww32'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww32']; } elseif ($item['ww32'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww32']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww33'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww33'] . '</div>'; }elseif ($item['ww33'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww33']; } elseif ($item['ww33'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww33']; } elseif ($item['ww33'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww33']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww34'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww34'] . '</div>'; }elseif ($item['ww34'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww34']; } elseif ($item['ww34'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww34']; } elseif ($item['ww34'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww34']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww35'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww35'] . '</div>'; }elseif ($item['ww35'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww35']; } elseif ($item['ww35'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww35']; } elseif ($item['ww35'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww35']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww36'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww36'] . '</div>'; }elseif ($item['ww36'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww36']; } elseif ($item['ww36'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww36']; } elseif ($item['ww36'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww36']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww37'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww37'] . '</div>'; }elseif ($item['ww37'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww37']; } elseif ($item['ww37'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww37']; } elseif ($item['ww37'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww37']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww38'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww38'] . '</div>'; }elseif ($item['ww38'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww38']; } elseif ($item['ww38'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww38']; } elseif ($item['ww38'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww38']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww39'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww39'] . '</div>'; }elseif ($item['ww39'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww39']; } elseif ($item['ww39'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww39']; } elseif ($item['ww39'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww39']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww40'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww40'] . '</div>'; }elseif ($item['ww40'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww40']; } elseif ($item['ww40'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww40']; } elseif ($item['ww40'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww40']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww40_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww40_1'] . '</div>'; }elseif ($item['ww40_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww40_1']; } elseif ($item['ww40_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww40_1']; } elseif ($item['ww40_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww40_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww41'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww41'] . '</div>'; }elseif ($item['ww41'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww41']; } elseif ($item['ww41'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww41']; } elseif ($item['ww41'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww41']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww42'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww42'] . '</div>'; }elseif ($item['ww42'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww42']; } elseif ($item['ww42'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww42']; } elseif ($item['ww42'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww42']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww43'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww43'] . '</div>'; }elseif ($item['ww43'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww43']; } elseif ($item['ww43'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww43']; } elseif ($item['ww43'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww43']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww44'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww44'] . '</div>'; }elseif ($item['ww44'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww44']; } elseif ($item['ww44'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww44']; } elseif ($item['ww44'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww44']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww45'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww45'] . '</div>'; }elseif ($item['ww45'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww45']; } elseif ($item['ww45'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww45']; } elseif ($item['ww45'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww45']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww45_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww45_1'] . '</div>'; }elseif ($item['ww45_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww45_1']; } elseif ($item['ww45_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww45_1']; } elseif ($item['ww45_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww45_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww46'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww46'] . '</div>'; }elseif ($item['ww46'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww46']; } elseif ($item['ww46'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww46']; } elseif ($item['ww46'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww46']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww47'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww47'] . '</div>'; }elseif ($item['ww47'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww47']; } elseif ($item['ww47'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww47']; } elseif ($item['ww47'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww47']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww48'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww48'] . '</div>'; }elseif ($item['ww48'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww48']; } elseif ($item['ww48'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww48']; } elseif ($item['ww48'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww48']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww49'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww49'] . '</div>'; }elseif ($item['ww49'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww49']; } elseif ($item['ww49'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww49']; } elseif ($item['ww49'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww49']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww49_1'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww49_1'] . '</div>'; }elseif ($item['ww49_1'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww49_1']; } elseif ($item['ww49_1'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww49_1']; } elseif ($item['ww49_1'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww49_1']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww50'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww50'] . '</div>'; }elseif ($item['ww50'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww50']; } elseif ($item['ww50'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww50']; } elseif ($item['ww50'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww50']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww51'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww51'] . '</div>'; }elseif ($item['ww51'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww51']; } elseif ($item['ww51'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww51']; } elseif ($item['ww51'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww51']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww52'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww52'] . '</div>'; }elseif ($item['ww52'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww52']; } elseif ($item['ww52'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww52']; } elseif ($item['ww52'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww52']; } ?></td>
                          <td align=center style="white-space:nowrap;"><?php if($item['ww53'] == 'D'){ echo '<div class="badge bg-success text-white p-2">' . $item['ww53'] . '</div>'; }elseif ($item['ww53'] == 'P/C') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww53']; } elseif ($item['ww53'] == 'P') { echo '<div class="badge bg-warning text-white p-2">' . $item['ww53']; } elseif ($item['ww53'] == 'U/R') { echo '<div class="badge bg-danger text-white p-2">' . $item['ww53']; } ?></td>    

                          <!-- <td align=center style="white-space:nowrap;"><?= $item['ww05'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww06'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww07'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww08'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww09'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww10'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww10_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww11'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww12'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww13'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww14'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww14_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww15'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww16'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww17'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww18'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww18_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww19'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww20'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww21'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww22'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww23'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww23_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww24'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww25'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww26'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww27'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww27_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww28'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww29'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww30'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww31'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww32'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww33'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww34'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww35'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww36'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww37'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww38'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww39'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww40'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww40_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww41'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww42'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww43'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww44'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww45'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww45_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww46'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww47'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww48'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww49'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww49_1'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww50'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww51'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww52'] ?></td>
                          <td align=center style="white-space:nowrap;"><?= $item['ww53'] ?></td>-->
                          <td align=center style="white-space:nowrap;">
                            <a class="btn btn-info btn-sm m-1" href="<?= base_url(); ?>Dashboard/ubah_preventive/<?= $item['id']?>" style="color: black"><i class="fas fa-solid fa-pencil-alt"></i></a>
                            <a href="<?= base_url() ?>Dashboard/deleteReportPreventive/<?= $item['id']?>" onclick="return confirm('Hapus?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
