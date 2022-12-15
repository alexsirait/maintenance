<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('login');  
    }  
    public function process()  
    {  
		$data["equipment_form"] = $this->DashboardModel->buatangka();
		$data["preventive_maintenance_form"] = $this->DashboardModel->buatangkapreventive();
		$data["wo_form"] = $this->DashboardModel->buatangkawo();
		
		$data['TotalD'] = $this->DashboardModel->hitungJumlahPretentive();
		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "D" || ww02 = "D" || ww03 = "D" || ww04 = "D" || ww05 = "D" || ww06 = "D" || ww07 = "D" || ww08 = "D" || ww09 = "D" || ww10 = "D" || ww10_1 = "D" || ww11 = "D" || ww12 = "D" || ww13 = "D" || ww14 = "D" || ww14_1 = "D" || ww15 = "D" || ww16 = "D" || ww17 = "D" || ww18 = "D" || ww18_1 = "D" || ww19 = "D" || ww20 = "D" || ww21 = "D" || ww22 = "D" || ww23 = "D" || ww23_1 = "D" || ww24 = "D" || ww25 = "D" || ww26 = "D" || ww27 = "D" || ww27_1 = "D" || ww28 = "D" || ww29 = "D" || ww30 = "D" || ww31 = "D" || ww32 = "D" || ww33 = "D" || ww34 = "D" || ww35 = "D" || ww36 = "D" || ww37 = "D" || ww38 = "D" || ww39 = "D" || ww40 = "D" || ww40_1 = "D" || ww41 = "D" || ww42 = "D" || ww43 = "D" || ww44 = "D" || ww45 = "D" || ww45_1 = "D" || ww46 = "D" || ww47 = "D" || ww48 = "D" || ww49 = "D" || ww49_1 = "D" || ww50 = "D" || ww51 = "D" || ww52 = "D" || ww53 = "D"';
		$alexganteng = $this->db->query($query);
		$data['bobi'] = $alexganteng->result_array();

		$query2 = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "P/C" || ww02 = "P/C" || ww03 = "P/C" || ww04 = "P/C" || ww05 = "P/C" || ww06 = "P/C" || ww07 = "P/C" || ww08 = "P/C" || ww09 = "P/C" || ww10 = "P/C" || ww10_1 = "P/C" || ww11 = "P/C" || ww12 = "P/C" || ww13 = "P/C" || ww14 = "P/C" || ww14_1 = "P/C" || ww15 = "P/C" || ww16 = "P/C" || ww17 = "P/C" || ww18 = "P/C" || ww18_1 = "P/C" || ww19 = "P/C" || ww20 = "P/C" || ww21 = "P/C" || ww22 = "P/C" || ww23 = "P/C" || ww23_1 = "P/C" || ww24 = "P/C" || ww25 = "P/C" || ww26 = "P/C" || ww27 = "P/C" || ww27_1 = "P/C" || ww28 = "P/C" || ww29 = "P/C" || ww30 = "P/C" || ww31 = "P/C" || ww32 = "P/C" || ww33 = "P/C" || ww34 = "P/C" || ww35 = "P/C" || ww36 = "P/C" || ww37 = "P/C" || ww38 = "P/C" || ww39 = "P/C" || ww40 = "P/C" || ww40_1 = "P/C" || ww41 = "P/C" || ww42 = "P/C" || ww43 = "P/C" || ww44 = "P/C" || ww45 = "P/C" || ww45_1 = "P/C" || ww46 = "P/C" || ww47 = "P/C" || ww48 = "P/C" || ww49 = "P/C" || ww49_1 = "P/C" || ww50 = "P/C" || ww51 = "P/C" || ww52 = "P/C" || ww53 = "P/C"';
		$alexganteng2 = $this->db->query($query2);
		$data['bobi2'] = $alexganteng2->result_array();

		$query3 = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "U/R" || ww02 = "U/R" || ww03 = "U/R" || ww04 = "U/R" || ww05 = "U/R" || ww06 = "U/R" || ww07 = "U/R" || ww08 = "U/R" || ww09 = "U/R" || ww10 = "U/R" || ww10_1 = "U/R" || ww11 = "U/R" || ww12 = "U/R" || ww13 = "U/R" || ww14 = "U/R" || ww14_1 = "U/R" || ww15 = "U/R" || ww16 = "U/R" || ww17 = "U/R" || ww18 = "U/R" || ww18_1 = "U/R" || ww19 = "U/R" || ww20 = "U/R" || ww21 = "U/R" || ww22 = "U/R" || ww23 = "U/R" || ww23_1 = "U/R" || ww24 = "U/R" || ww25 = "U/R" || ww26 = "U/R" || ww27 = "U/R" || ww27_1 = "U/R" || ww28 = "U/R" || ww29 = "U/R" || ww30 = "U/R" || ww31 = "U/R" || ww32 = "U/R" || ww33 = "U/R" || ww34 = "U/R" || ww35 = "U/R" || ww36 = "U/R" || ww37 = "U/R" || ww38 = "U/R" || ww39 = "U/R" || ww40 = "U/R" || ww40_1 = "U/R" || ww41 = "U/R" || ww42 = "U/R" || ww43 = "U/R" || ww44 = "U/R" || ww45 = "U/R" || ww45_1 = "U/R" || ww46 = "U/R" || ww47 = "U/R" || ww48 = "U/R" || ww49 = "U/R" || ww49_1 = "U/R" || ww50 = "U/R" || ww51 = "U/R" || ww52 = "U/R" || ww53 = "U/R"';
		$alexganteng3 = $this->db->query($query3);
		$data['bobi3'] = $alexganteng3->result_array();

		$query4 = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "P" || ww02 = "P" || ww03 = "P" || ww04 = "P" || ww05 = "P" || ww06 = "P" || ww07 = "P" || ww08 = "P" || ww09 = "P" || ww10 = "P" || ww10_1 = "P" || ww11 = "P" || ww12 = "P" || ww13 = "P" || ww14 = "P" || ww14_1 = "P" || ww15 = "P" || ww16 = "P" || ww17 = "P" || ww18 = "P" || ww18_1 = "P" || ww19 = "P" || ww20 = "P" || ww21 = "P" || ww22 = "P" || ww23 = "P" || ww23_1 = "P" || ww24 = "P" || ww25 = "P" || ww26 = "P" || ww27 = "P" || ww27_1 = "P" || ww28 = "P" || ww29 = "P" || ww30 = "P" || ww31 = "P" || ww32 = "P" || ww33 = "P" || ww34 = "P" || ww35 = "P" || ww36 = "P" || ww37 = "P" || ww38 = "P" || ww39 = "P" || ww40 = "P" || ww40_1 = "P" || ww41 = "P" || ww42 = "P" || ww43 = "P" || ww44 = "P" || ww45 = "P" || ww45_1 = "P" || ww46 = "P" || ww47 = "P" || ww48 = "P" || ww49 = "P" || ww49_1 = "P" || ww50 = "P" || ww51 = "P" || ww52 = "P" || ww53 = "P"';
		$alexganteng4 = $this->db->query($query4);
		$data['bobi4'] = $alexganteng4->result_array();

		foreach ($data['bobi2'] as $b) { $pretentive_calibration = $b['total']; }
		foreach ($data['bobi4'] as $b) { $ppm = $b['total']; }
		foreach ($data['bobi'] as $b) { $aji1 = $b['total']; }
		foreach ($data['bobi2'] as $b) { $aji2 = $b['total']; }
		foreach ($data['bobi3'] as $b) { $aji3 = $b['total']; }
		foreach ($data['bobi4'] as $b) { $aji4 = $b['total']; }
		
		$sumpretentive_calibration = $pretentive_calibration;
		$data['hsumpretentive_calibration'] = round($sumpretentive_calibration);

		$sumppm = $ppm;
		$data['hsumppm'] = round($sumppm);

		$sumajalah = ($aji1 + $aji2 + $aji3 + $aji4) / 4;
		$data['apaajalaa'] = round($sumajalah / $data["preventive_maintenance_form"] * 100, 2);

		// Grafik Actual
		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "D" || ww02 = "D" || ww03 = "D" || ww04 = "D" || ww05 = "D"';
		$january = $this->db->query($query);
		$data['january'] = $january->result_array();
		
		foreach ($data['january'] as $month) { $datajanuary = $month['total'];}
		$sumjanuary = $datajanuary;
		$data['hjanuary'] = round($sumjanuary);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww06 = "D" || ww07 = "D" || ww08 = "D" || ww09 = "D" || ww10 = "D"';
		$february = $this->db->query($query);
		$data['february'] = $february->result_array();

		foreach ($data['february'] as $month) { $datafebruary = $month['total'];}
		$sumfebruary = $datafebruary;
		$data['hfebruary'] = round($sumfebruary);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww10_1 = "D" || ww11 = "D" || ww12 = "D" || ww13 = "D" || ww14 = "D"';
		$march = $this->db->query($query);
		$data['march'] = $march->result_array();

		foreach ($data['march'] as $month) { $datamarch = $month['total'];}
		$summarch = $datamarch;
		$data['hmarch'] = round($summarch);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww14_1 = "D" || ww15 = "D" || ww16 = "D" || ww17 = "D" || ww18 = "D"';
		$april = $this->db->query($query);
		$data['april'] = $april->result_array();

		foreach ($data['april'] as $month) { $dataapril = $month['total'];}
		$sumapril = $dataapril;
		$data['hapril'] = round($sumapril);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww18_1 = "D" || ww19 = "D" || ww20 = "D" || ww21 = "D" || ww22 = "D" || ww23 = "D"';
		$may = $this->db->query($query);
		$data['may'] = $may->result_array();

		foreach ($data['may'] as $month) { $datamay = $month['total'];}
		$summay = $datamay;
		$data['hmay'] = round($summay);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww23_1 = "D" || ww24 = "D" || ww25 = "D" || ww26 = "D" || ww27 = "D"';
		$june = $this->db->query($query);
		$data['june'] = $june->result_array();

		foreach ($data['june'] as $month) { $datajune = $month['total'];}
		$sumjune = $datajune;
		$data['hjune'] = round($sumjune);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww27_1 = "D" || ww28 = "D" || ww29 = "D" || ww30 = "D" || ww31 = "D"';
		$july = $this->db->query($query);
		$data['july'] = $july->result_array();

		foreach ($data['july'] as $month) { $datajuly = $month['total'];}
		$sumjuly = $datajuly;
		$data['hjuly'] = round($sumjuly);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww32 = "D" || ww33 = "D" || ww34 = "D" || ww35 = "D" || ww36 = "D"';
		$august = $this->db->query($query);
		$data['august'] = $august->result_array();

		foreach ($data['august'] as $month) { $dataaugust = $month['total'];}
		$sumaugust = $dataaugust;
		$data['haugust'] = round($sumaugust);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww37 = "D" || ww38 = "D" || ww39 = "D" || ww40 = "D"';
		$september = $this->db->query($query);
		$data['september'] = $september->result_array();

		foreach ($data['september'] as $month) { $dataseptember = $month['total'];}
		$sumseptember = $dataseptember;
		$data['hseptember'] = round($sumseptember);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww40_1 = "D" || ww41 = "D" || ww42 = "D" || ww43 = "D" || ww44 = "D" || ww45 = "D"';
		$october = $this->db->query($query);
		$data['october'] = $october->result_array();

		foreach ($data['october'] as $month) { $dataoctober = $month['total'];}
		$sumoctober = $dataoctober;
		$data['hoctober'] = round($sumoctober);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww45_1 = "D" || ww46 = "D" || ww47 = "D" || ww48 = "D" || ww49 = "D"';
		$november = $this->db->query($query);
		$data['november'] = $november->result_array();

		foreach ($data['november'] as $month) { $datanovember = $month['total'];}
		$sumnovember = $datanovember;
		$data['hnovember'] = round($sumnovember);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww49_1 = "D" || ww50 = "D" || ww51 = "D" || ww52 = "D" || ww53 = "D"';
		$december = $this->db->query($query);
		$data['december'] = $december->result_array();

		foreach ($data['december'] as $month) { $datadecember = $month['total'];}
		$sumdecember = $datadecember;
		$data['hdecember'] = round($sumdecember);

		// Grafik PPM
		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "P" || ww02 = "P" || ww03 = "P" || ww04 = "P" || ww05 = "P"';
		$january_ppm = $this->db->query($query);
		$data['january_ppm'] = $january_ppm->result_array();

		foreach ($data['january_ppm'] as $month) { $datajanuary_ppm = $month['total'];}
		$sumjanuary_ppm = $datajanuary_ppm;
		$data['hjanuary_ppm'] = round($sumjanuary_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww06 = "P" || ww07 = "P" || ww08 = "P" || ww09 = "P" || ww10 = "P"';
		$february_ppm = $this->db->query($query);
		$data['february_ppm'] = $february_ppm->result_array();

		foreach ($data['february_ppm'] as $month) { $datafebruary_ppm = $month['total'];}
		$sumfebruary_ppm = $datafebruary_ppm;
		$data['hfebruary_ppm'] = round($sumfebruary_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww10_1 = "P" || ww11 = "P" || ww12 = "P" || ww13 = "P" || ww14 = "P"';
		$march_ppm = $this->db->query($query);
		$data['march_ppm'] = $march_ppm->result_array();

		foreach ($data['march_ppm'] as $month) { $datamarch_ppm = $month['total'];}
		$summarch_ppm = $datamarch_ppm;
		$data['hmarch_ppm'] = round($summarch_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww14_1 = "P" || ww15 = "P" || ww16 = "P" || ww17 = "P" || ww18 = "P"';
		$april_ppm = $this->db->query($query);
		$data['april_ppm'] = $april_ppm->result_array();

		foreach ($data['april_ppm'] as $month) { $dataapril_ppm = $month['total'];}
		$sumapril_ppm = $dataapril_ppm;
		$data['hapril_ppm'] = round($sumapril_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww18_1 = "P" || ww19 = "P" || ww20 = "P" || ww21 = "P" || ww22 = "P" || ww23 = "P"';
		$may_ppm = $this->db->query($query);
		$data['may_ppm'] = $may_ppm->result_array();

		foreach ($data['may_ppm'] as $month) { $datamay_ppm = $month['total'];}
		$summay_ppm = $datamay_ppm;
		$data['hmay_ppm'] = round($summay_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww23_1 = "P" || ww24 = "P" || ww25 = "P" || ww26 = "P" || ww27 = "P"';
		$june_ppm = $this->db->query($query);
		$data['june_ppm'] = $june_ppm->result_array();

		foreach ($data['june_ppm'] as $month) { $datajune_ppm = $month['total'];}
		$sumjune_ppm = $datajune_ppm;
		$data['hjune_ppm'] = round($sumjune_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww27_1 = "P" || ww28 = "P" || ww29 = "P" || ww30 = "P" || ww31 = "P"';
		$july_ppm = $this->db->query($query);
		$data['july_ppm'] = $july_ppm->result_array();

		foreach ($data['july_ppm'] as $month) { $datajuly_ppm = $month['total'];}
		$sumjuly_ppm = $datajuly_ppm;
		$data['hjuly_ppm'] = round($sumjuly_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww32 = "P" || ww33 = "P" || ww34 = "P" || ww35 = "P" || ww36 = "P"';
		$august_ppm = $this->db->query($query);
		$data['august_ppm'] = $august_ppm->result_array();

		foreach ($data['august_ppm'] as $month) { $dataaugust_ppm = $month['total'];}
		$sumaugust_ppm = $dataaugust_ppm;
		$data['haugust_ppm'] = round($sumaugust_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww37 = "P" || ww38 = "P" || ww39 = "P" || ww40 = "P"';
		$september_ppm = $this->db->query($query);
		$data['september_ppm'] = $september_ppm->result_array();

		foreach ($data['september_ppm'] as $month) { $dataseptember_ppm = $month['total'];}
		$sumseptember_ppm = $dataseptember_ppm;
		$data['hseptember_ppm'] = round($sumseptember_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww40_1 = "P" || ww41 = "P" || ww42 = "P" || ww43 = "P" || ww44 = "P" || ww45 = "P"';
		$october_ppm = $this->db->query($query);
		$data['october_ppm'] = $october_ppm->result_array();

		foreach ($data['october_ppm'] as $month) { $dataoctober_ppm = $month['total'];}
		$sumoctober_ppm = $dataoctober_ppm;
		$data['hoctober_ppm'] = round($sumoctober_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww45_1 = "P" || ww46 = "P" || ww47 = "P" || ww48 = "P" || ww49 = "P"';
		$november_ppm = $this->db->query($query);
		$data['november_ppm'] = $november_ppm->result_array();

		foreach ($data['november_ppm'] as $month) { $datanovember_ppm = $month['total'];}
		$sumnovember_ppm = $datanovember_ppm;
		$data['hnovember_ppm'] = round($sumnovember_ppm);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww49_1 = "P" || ww50 = "P" || ww51 = "P" || ww52 = "P" || ww53 = "P"';
		$december_ppm = $this->db->query($query);
		$data['december_ppm'] = $december_ppm->result_array();

		foreach ($data['december_ppm'] as $month) { $datadecember_ppm = $month['total'];}
		$sumdecember_ppm = $datadecember_ppm;
		$data['hdecember_ppm'] = round($sumdecember_ppm);

        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='aji@gmail.com' && $pass=='123')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            $this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    }  
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("Login");  
    }  
  
}  
?>  