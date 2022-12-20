<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		is_logged_in();
	}

	public function index()
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

		// Grafik PPM Calibration
		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww01 = "P/C" || ww02 = "P/C" || ww03 = "P/C" || ww04 = "P/C" || ww05 = "P/C"';
		$january_ppm_c = $this->db->query($query);
		$data['january_ppm_c'] = $january_ppm_c->result_array();

		foreach ($data['january_ppm_c'] as $month) { $datajanuary_ppm_c = $month['total'];}
		$sumjanuary_ppm_c = $datajanuary_ppm_c;
		$data['hjanuary_ppm_c'] = round($sumjanuary_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww06 = "P/C" || ww07 = "P/C" || ww08 = "P/C" || ww09 = "P/C" || ww10 = "P/C"';
		$february_ppm_c = $this->db->query($query);
		$data['february_ppm_c'] = $february_ppm_c->result_array();

		foreach ($data['february_ppm_c'] as $month) { $datafebruary_ppm_c = $month['total'];}
		$sumfebruary_ppm_c = $datafebruary_ppm_c;
		$data['hfebruary_ppm_c'] = round($sumfebruary_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww10_1 = "P/C" || ww11 = "P/C" || ww12 = "P/C" || ww13 = "P/C" || ww14 = "P/C"';
		$march_ppm_c = $this->db->query($query);
		$data['march_ppm_c'] = $march_ppm_c->result_array();

		foreach ($data['march_ppm_c'] as $month) { $datamarch_ppm_c = $month['total'];}
		$summarch_ppm_c = $datamarch_ppm_c;
		$data['hmarch_ppm_c'] = round($summarch_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww14_1 = "P/C" || ww15 = "P/C" || ww16 = "P/C" || ww17 = "P/C" || ww18 = "P/C"';
		$april_ppm_c = $this->db->query($query);
		$data['april_ppm_c'] = $april_ppm_c->result_array();

		foreach ($data['april_ppm_c'] as $month) { $dataapril_ppm_c = $month['total'];}
		$sumapril_ppm_c = $dataapril_ppm_c;
		$data['hapril_ppm_c'] = round($sumapril_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww18_1 = "P/C" || ww19 = "P/C" || ww20 = "P/C" || ww21 = "P/C" || ww22 = "P/C" || ww23 = "P/C"';
		$may_ppm_c = $this->db->query($query);
		$data['may_ppm_c'] = $may_ppm_c->result_array();

		foreach ($data['may_ppm_c'] as $month) { $datamay_ppm_c = $month['total'];}
		$summay_ppm_c = $datamay_ppm_c;
		$data['hmay_ppm_c'] = round($summay_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww23_1 = "P/C" || ww24 = "P/C" || ww25 = "P/C" || ww26 = "P/C" || ww27 = "P/C"';
		$june_ppm_c = $this->db->query($query);
		$data['june_ppm_c'] = $june_ppm_c->result_array();

		foreach ($data['june_ppm_c'] as $month) { $datajune_ppm_c = $month['total'];}
		$sumjune_ppm_c = $datajune_ppm_c;
		$data['hjune_ppm_c'] = round($sumjune_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww27_1 = "P/C" || ww28 = "P/C" || ww29 = "P/C" || ww30 = "P/C" || ww31 = "P/C"';
		$july_ppm_c = $this->db->query($query);
		$data['july_ppm_c'] = $july_ppm_c->result_array();

		foreach ($data['july_ppm_c'] as $month) { $datajuly_ppm_c = $month['total'];}
		$sumjuly_ppm_c = $datajuly_ppm_c;
		$data['hjuly_ppm_c'] = round($sumjuly_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww32 = "P/C" || ww33 = "P/C" || ww34 = "P/C" || ww35 = "P/C" || ww36 = "P/C"';
		$august_ppm_c = $this->db->query($query);
		$data['august_ppm_c'] = $august_ppm_c->result_array();

		foreach ($data['august_ppm_c'] as $month) { $dataaugust_ppm_c = $month['total'];}
		$sumaugust_ppm_c = $dataaugust_ppm_c;
		$data['haugust_ppm_c'] = round($sumaugust_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww37 = "P/C" || ww38 = "P/C" || ww39 = "P/C" || ww40 = "P/C"';
		$september_ppm_c = $this->db->query($query);
		$data['september_ppm_c'] = $september_ppm_c->result_array();

		foreach ($data['september_ppm_c'] as $month) { $dataseptember_ppm_c = $month['total'];}
		$sumseptember_ppm_c = $dataseptember_ppm_c;
		$data['hseptember_ppm_c'] = round($sumseptember_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww40_1 = "P/C" || ww41 = "P/C" || ww42 = "P/C" || ww43 = "P/C" || ww44 = "P/C" || ww45 = "P/C"';
		$october_ppm_c = $this->db->query($query);
		$data['october_ppm_c'] = $october_ppm_c->result_array();

		foreach ($data['october_ppm_c'] as $month) { $dataoctober_ppm_c = $month['total'];}
		$sumoctober_ppm_c = $dataoctober_ppm_c;
		$data['hoctober_ppm_c'] = round($sumoctober_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww45_1 = "P/C" || ww46 = "P/C" || ww47 = "P/C" || ww48 = "P/C" || ww49 = "P/C"';
		$november_ppm_c = $this->db->query($query);
		$data['november_ppm_c'] = $november_ppm_c->result_array();

		foreach ($data['november_ppm_c'] as $month) { $datanovember_ppm_c = $month['total'];}
		$sumnovember_ppm_c = $datanovember_ppm_c;
		$data['hnovember_ppm_c'] = round($sumnovember_ppm_c);

		$query = 'SELECT count(*) AS total FROM `preventive_maintenance_form` WHERE ww49_1 = "P/C" || ww50 = "P/C" || ww51 = "P/C" || ww52 = "P/C" || ww53 = "P/C"';
		$december_ppm_c = $this->db->query($query);
		$data['december_ppm_c'] = $december_ppm_c->result_array();

		foreach ($data['december_ppm_c'] as $month) { $datadecember_ppm_c = $month['total'];}
		$sumdecember_ppm_c = $datadecember_ppm_c;
		$data['hdecember_ppm_c'] = round($sumdecember_ppm_c);

		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function add_equipment()
	{
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('add_equipment');
		$this->load->view('templates/footer');
	}

	public function add_maintenance()
	{
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('add_maintenance');
		$this->load->view('templates/footer');
	}

	// Masterlist of the Equipment
	public function save_equipment()
  	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$machine_description = $this->input->post('machine_description');
		$family_name = $this->input->post('family_name');
		$type_of_machine = $this->input->post('type_of_machine');
		$model = $this->input->post('model');
		$serial = $this->input->post('serial');
		$capacity = $this->input->post('capacity');
		$product = $this->input->post('product');
		$year = $this->input->post('year');
		$location = $this->input->post('location');
		$status = $this->input->post('status');
		$group = $this->input->post('group');
		$pic = $this->input->post('pic');
		
		$data = Array(
			"id" => $id,
			"code" => $code,
			"machine_description" => $machine_description,
			"family_name" => $family_name,
			"type_of_machine" => $type_of_machine,
			"model" => $model,
			"serial" => $serial,
			"capacity" => $capacity,  
			"product" => $product,
			"year" => $year,
			"location" => $location,
			"status" => $status,
			"group" => $group,
			"pic" => $pic,																	
		);

		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('machine_description', 'Applicable Machine Description', 'required');
		$this->form_validation->set_rules('family_name', 'Family Name Required', 'required');
		$this->form_validation->set_rules('type_of_machine', 'Type of Machine', 'required');
		$this->form_validation->set_rules('model', 'Model','required');
		$this->form_validation->set_rules('serial', 'Serial / Control', 'required');
		$this->form_validation->set_rules('capacity', 'Required Capacity');
		$this->form_validation->set_rules('product', 'Product', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');		
		$this->form_validation->set_rules('location', 'Location', 'required');		
		$this->form_validation->set_rules('status', 'Status', 'required');		
		$this->form_validation->set_rules('group', 'Group', 'required');		
		$this->form_validation->set_rules('pic', 'Pic', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('add_equipment',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->addequipment($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Masterlist of the Equipment Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Dashboard/checkreport_equipment');
		}

		// $this->DashboardModel->addequipment($data);
		// $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// return redirect('Dashboard/checkreport_equipment');
  	}

	public function checkreport_equipment()
	{
		$data["equipment_form"] = $this->DashboardModel->getEquipmentForm();	
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();	  

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('equipment_list',$data);
		$this->load->view('templates/footer');
	}
	  
	public function deleteReport($id)
	{		
		$id = $this->DashboardModel->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Masterlist of the Equipment Data Deleted Succesfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Dashboard/checkreport_equipment');
	}

	public function ubah_equipment($id)
	{
		$data["equipment_form"] = $this->DashboardModel->edit_equipment($id);

		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('machine_description', 'Applicable Machine Description', 'required');
		$this->form_validation->set_rules('family_name', 'Family Name Required', 'required');
		$this->form_validation->set_rules('type_of_machine', 'Type of Machine', 'required');
		$this->form_validation->set_rules('model', 'Model','required');
		$this->form_validation->set_rules('serial', 'Serial / Control', 'required');
		$this->form_validation->set_rules('capacity', 'Required Capacity');
		$this->form_validation->set_rules('product', 'Product', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');		
		$this->form_validation->set_rules('location', 'Location', 'required');		
		$this->form_validation->set_rules('status', 'Status', 'required');		
		$this->form_validation->set_rules('group', 'Group', 'required');		
		$this->form_validation->set_rules('pic', 'Pic', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('ubah_equipment',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->editequipment();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Masterlist of the Equipment Edit data success!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return  redirect('Dashboard/checkreport_equipment');
		}
	}

	// Planned Preventive Maintenance
	public function save_preventive()
  	{
		$id = $this->input->post('id');
		$machine = $this->input->post('machine');
		$description = $this->input->post('description');
		$section = $this->input->post('section');
		$ww01 = $this->input->post('ww01');
		$ww02 = $this->input->post('ww02');
		$ww03 = $this->input->post('ww03');
		$ww04 = $this->input->post('ww04');
		$ww05 = $this->input->post('ww05');
		$ww06 = $this->input->post('ww06');
		$ww07 = $this->input->post('ww07');
		$ww08 = $this->input->post('ww08');
		$ww09 = $this->input->post('ww09');
		$ww10= $this->input->post('ww10');
		$ww10_1 = $this->input->post('ww10_1');
		$ww11 = $this->input->post('ww11');
		$ww12 = $this->input->post('ww12');
		$ww13 = $this->input->post('ww13');
		$ww14 = $this->input->post('ww14');
		$ww14_1 = $this->input->post('ww14_1');
		$ww15 = $this->input->post('ww15');
		$ww16 = $this->input->post('ww16');
		$ww17 = $this->input->post('ww17');
		$ww18 = $this->input->post('ww18');
		$ww18_1 = $this->input->post('ww18_1');
		$ww19 = $this->input->post('ww19');
		$ww20 = $this->input->post('ww20');
		$ww21 = $this->input->post('ww21');
		$ww22 = $this->input->post('ww22');
		$ww23 = $this->input->post('ww23');
		$ww23_1 = $this->input->post('ww23_1');
		$ww24 = $this->input->post('ww24');
		$ww25 = $this->input->post('ww25');
		$ww26 = $this->input->post('ww26');
		$ww27 = $this->input->post('ww27');
		$ww27_1 = $this->input->post('ww27_1');
		$ww28 = $this->input->post('ww28');
		$ww29 = $this->input->post('ww29');
		$ww30 = $this->input->post('ww30');
		$ww31 = $this->input->post('ww31');
		$ww32 = $this->input->post('ww32');
		$ww33 = $this->input->post('ww33');
		$ww34 = $this->input->post('ww34');
		$ww35 = $this->input->post('ww35');
		$ww36 = $this->input->post('ww36');
		$ww37 = $this->input->post('ww37');
		$ww38 = $this->input->post('ww38');
		$ww39 = $this->input->post('ww39');
		$ww40 = $this->input->post('ww40');
		$ww40_1 = $this->input->post('ww40_1');
		$ww41 = $this->input->post('ww41');
		$ww42 = $this->input->post('ww42');
		$ww43 = $this->input->post('ww43');
		$ww44 = $this->input->post('ww44');
		$ww45 = $this->input->post('ww45');
		$ww45_1 = $this->input->post('ww45_1');
		$ww46 = $this->input->post('ww46');
		$ww47 = $this->input->post('ww47');
		$ww48 = $this->input->post('ww48');
		$ww49 = $this->input->post('ww49');
		$ww49_1 = $this->input->post('ww49_1');
		$ww50 = $this->input->post('ww50');
		$ww51 = $this->input->post('ww51');
		$ww52 = $this->input->post('ww52');
		$ww53 = $this->input->post('ww53');
		
		
		$data = Array(
			"id" => $id,
			"machine" => $machine,
			"description" => $description,
			"section" => $section,
			"ww01" => $ww01,
			"ww02" => $ww02,
			"ww03" => $ww03,
			"ww04" => $ww04,
			"ww05" => $ww05,
			"ww06" => $ww06,
			"ww07" => $ww07,
			"ww08" => $ww08,
			"ww09" => $ww09,
			"ww10" => $ww10,
			"ww10_1" => $ww10_1,
			"ww11" => $ww11,
			"ww12" => $ww12,
			"ww13" => $ww13,
			"ww14" => $ww14,
			"ww14_1" => $ww14_1,
			"ww15" => $ww15,
			"ww16" => $ww16,
			"ww17" => $ww17,
			"ww18" => $ww18,
			"ww18_1" => $ww18_1,
			"ww19" => $ww19,
			"ww20" => $ww20,
			"ww21" => $ww21,
			"ww22" => $ww22,
			"ww23" => $ww23,
			"ww23_1" => $ww23_1,
			"ww24" => $ww24,
			"ww25" => $ww25,
			"ww26" => $ww26,
			"ww27" => $ww27,
			"ww27_1" => $ww27_1,
			"ww28" => $ww28,
			"ww29" => $ww29,
			"ww30" => $ww30,
			"ww31" => $ww31,
			"ww32" => $ww32,
			"ww33" => $ww33,
			"ww34" => $ww34,
			"ww35" => $ww35,
			"ww36" => $ww36,
			"ww37" => $ww37,
			"ww38" => $ww38,
			"ww39" => $ww39,
			"ww40" => $ww40,
			"ww40_1" => $ww40_1,
			"ww41" => $ww41,
			"ww42" => $ww42,
			"ww43" => $ww43,
			"ww44" => $ww44,
			"ww45" => $ww45,
			"ww45_1" => $ww45_1,
			"ww46" => $ww46,
			"ww47" => $ww47,
			"ww48" => $ww48,
			"ww49" => $ww49,
			"ww49_1" => $ww49_1,
			"ww50" => $ww50,
			"ww51" => $ww51,
			"ww52" => $ww52,
			"ww53" => $ww53,
																				
		);

		$this->form_validation->set_rules('machine', 'machine', 'required');				
		$this->form_validation->set_rules('description', 'description', 'required');				
		$this->form_validation->set_rules('section', 'section', 'required');				

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('add_maintenance',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->addpreventive($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Planned Preventive Maintenance Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Dashboard/checkreport_preventive');
		}
  	}

	public function checkreport_preventive()
	{
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();
		$data["preventive_maintenance_form"] = $this->DashboardModel->getpreventiveForm();		  

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('preventive_maintenance',$data);
		$this->load->view('templates/footer');
	}

	public function deleteReportPreventive($id)
	{		
		$id = $this->DashboardModel->hapuspreventive($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Planned Preventive Maintenance Data Deleted Succesfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Dashboard/checkreport_preventive');
	}

	public function ubah_preventive($id)
	{
		$data["preventive_maintenance_form"] = $this->DashboardModel->edit_preventive($id);
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('machine', 'Machine', 'required');
		$this->form_validation->set_rules('description', 'Applicable Machine Description', 'required');
		$this->form_validation->set_rules('section', 'Section Required', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('ubah_maintenance',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->editpreventive();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Planned Preventive Maintenance Edit data success!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return  redirect('Dashboard/checkreport_preventive');
		}
	}

	// PPM vs Actual
	public function PPMvsActual()
	{
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$data["preventive_maintenance_form"] = $this->DashboardModel->getpreventiveForm();
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

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('PPMvsActual', $data);
		$this->load->view('templates/footer');
	}
}
