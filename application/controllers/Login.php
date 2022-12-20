<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect(base_url());
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            // fitur check apakah user aktif atau tidak, telah dihapus
            $this->_login(); // Masuk ke function private _login()
        }
    }

    private function _login()
    {
        // Menyimpan hasil input ke dalam variable
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Menangkap user berdasarkan email saja
        $user = $this->db->get_where('employee', ['email' => $email])->row_array();

        // Mengecek apakah email ada di database atau tidak
        if ($user) {
            // Jika email telah diautentikasi, selanjutnya cek password
            if (password_verify($password, $user['password'])) {

                // UNTUK ECR
                // sebelum menyimpan session, ubah role-nya dari angka menjadi kata-kata
                if ($user['employee_id'] == 3714 || $user['employee_id'] == 9999) {
                    $role = 'ceo';
                } else if ($user['role_id'] == 1) {
                    $role = 'administrator';
                } else if ($user['role_id'] == 3) {
                    if ($user['department_id'] == 6) {
                        $role = 'hrd';
                    } else {
                        $role = 'manager';
                    }
                } else if ($user['role_id'] == 4) {
                    $role = 'hrd';
                    // } else if ($user['section_id'] == 26) {
                    //     $role = 'security';
                    //     $user['role_id'] = '7';
                } else if ($user['role_id'] == 7) {
                    $role = 'security';
                } else if ($user['role_id'] == 6 || $user['role_id'] == 9) {
                    $role = 'user';
                } else if ($user['role_id'] == 5 || $user['role_id'] == 8) {
                    $role = 'direct_leader';
                } else if ($user['role_id'] == 10) {
                    $role = 'manager';
                } // UNTUK YANG 5, SEBENARNYA TIDAK UNTUK ECR, TAPI UNTUK UMUM, KARENA KALAU TIDAK DI TULIS, MAKA SESSION UNTUK ROLENYA AKAN KOSONG

                // Jika password benar, maka simpan session-nya
                $data = [
                    'email' => $email,
                    'role_id' => $user['role_id'],
                    'employee_id' => $user['employee_id'],
                    'full_name' => $user['employee_name'],
                    // 'role' => $user['role_id'],
                    'role' => $role,
                    'logged_in' => true,
                    // 'id' => $id,
                    // 'id' => $user['employee_id'],
                    // 'level_id' => $level_id,
                    'level_id' => $user['gatepass_level_id'],
                ];
                $this->session->set_userdata($data);

                redirect(base_url('dashboard'));
            } else {
                // Jika password salah, tampilkan alert menggunakan flashdata dan arahkan ke halaman auth/index
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password is incorrect!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>');
                redirect('Login');
            }
            // Akhir dari Jika email telah diautentikasi, selanjutnya cek password
        } else {
            // Jika email yang dimasukkan tidak ada di dalam database, tampilkan alert menggunakan flashdata dan arahkan ke halaman auth/index
            $this->session->set_flashdata('message', '<div class="alert alert-danger form-control-user" role="alert">Your Email is not Registered!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>');
            redirect('Login');
        }
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

        $email =  $this->input->post('email');  
        $pass = $this->input->post('pass');  

        if ($email == $user['email'] && $pass == $user['pass'])   
        {  
			$this->session->set_userdata(array('user'=>$user));  
            redirect(base_url('dashboard'));  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    }  
    public function logout()  
    {  
        $this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Log out<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>');

        redirect(base_url('login'));
    }
    
    public function change_password()
    {
        $data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('change_password', $data);
		$this->load->view('templates/footer');
    }

    public function block()
    {
        $this->load->view('templates/error');
    }
  
}  
?>  