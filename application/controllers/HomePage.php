<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomePage extends CI_Controller{

		function construct(){
			parrent::__construct();
			$this->load->helper('url');
			$this->load->model('Profile');
		}


		function index(){
			$this->load->view('index');
		}

		function Login(){

			$this->load->model('Profile');
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');

			if($this->Profile->cekUsername($data['username'])->num_rows() != 0) {
				$pass = $this->Profile->getPassword($data['username'])->row();
				if(password_verify($data['password'],$pass->password)) {
					$this->load->view('home');
				}else{
					// redirect(site_url('HomePage'));
					// echo print_r($this->Profile->getPassword($data['username'])->result());
					// $data2 = array_shift($this->Profile->getPassword($data['username'])->result_array() ) ;
					// echo $data2['password'];
					echo "password salah";
				}
			}else{
					// redirect(site_url('HomePage'));
					echo "Username belum terdaftar";
			}
			

		}
	}
 ?>