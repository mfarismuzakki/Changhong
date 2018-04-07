<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomePage extends CI_Controller{

		function construct(){
			parrent::__construct();
			$this->load->helper('url');
			$this->load->model('Profile');
		}


		function index(){
			$this->load->view('load_bootstrap/css');
			$this->load->view('front/index');
		}

		function Login(){

			$this->load->model('Profile');
			$data['username'] = $this->input->post('username');
			 $data['password'] = $this->input->post('password');

			 if($this->Profile->cekUsername($data['username'])->num_rows() != 0) {
			 	$pass = $this->Profile->getPassword($data['username'])->row();
			 	if(password_verify($data['password'],$pass->password)) {
					

			 		$userdata = array(
			 			'username' => $data['username'],
			 			'password' => $data['password'],
			 			'loged_in' => TRUE,
						'id_akun' =>$this->Profile->getIdAkun($data['username'])->row()
						
		 			);
		 			$this->session->set_userdata($userdata);

		 			 $this->session->name = $data['username'];
		 			 $this->session->password = $data['password'];
		 			 $this->session->password = $data['password'];



		 			$this->load->view('load_bootstrap/css');
		 			$this->load->view('users/home');
		 			$this->load->view('template/footer');
		 		}else{
		 			 redirect(site_url('HomePage'));
		 			 echo print_r($this->Profile->getPassword($data['username'])->result());
		 			 $data2 = array_shift($this->Profile->getPassword($data['username'])->result_array() ) ;
		 			 echo $data2['password'];
		 			echo "password salah";
		 		}
		 	}else{
		 			 redirect(site_url('HomePage'));
		 			echo "Username belum terdaftar";
		 	}
			

		}
	}
 ?>