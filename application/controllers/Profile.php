<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Profile extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('profile');
		$this->load->view('templates/footer');
    } 
}