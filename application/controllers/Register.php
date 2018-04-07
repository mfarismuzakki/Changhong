<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller{

		function construct(){
			parrent::__construct();
			$this->load->helper('url');
			$this->load->model('Profile');
		}


		function index(){
			if($this->session->userdata('loged_in')){
				redirect('HomeUser');
			}else{
				$this->load->view('load_bootstrap/css');
			$this->load->view('front/register');
			}
		}

		function Proses(){

			$this->load->model('Profile');
			$data['username'] = $this->input->post('username');
			$data['email'] = $this->input->post('email');
			$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$data['fullname'] = $this->input->post('username');
			$data['biodata'] = " ";
			$data['foto'] = base_url()."/Image/default.png";

			$this->Profile->insertAkun($data);


			$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'ssl://smtp.googlemail.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'admyoker@gmail.com',
			    'smtp_pass' => 'farisganteng123',
			    'mailtype'  => 'text', 
			    'charset'   => 'iso-8859-1'
			);

			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");

			$this->email->from('admyoker@gmail.com', 'Changhong Forum Discussion');
	        $this->email->to($data['email']); 

	        $this->email->subject($data['username']);
	        $this->email->message('Selamat Bergabung dengan Changhong '.$data['username'].' :)');  
	        $this->email->send();


			$this->load->view('load_bootstrap/css');
			$this->load->view('front/register_success');		
	        // echo $this->email->print_debugger();
		}

	}
	


 ?>