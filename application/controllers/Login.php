<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('login');  
    }  
    public function process()  
    {  
        $user = array(
            'email' => 'alex@gmail.com', 
            'pass' => '123',
            'name' => 'Alex Sirait', 
            'department' => 'BOSS', 
            'emp_id' => '123456', 
        );  
        if ($user['email']=='alex@gmail.com' && $user['pass']=='123')   
        {  
			$this->session->set_userdata(array('user'=>$user));  
            redirect('dashboard');  
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
    
    public function change_password()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('change_password');
		$this->load->view('templates/footer');
    }
  
}  
?>  