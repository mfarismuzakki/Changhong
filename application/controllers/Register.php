<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller{

		function construct(){
			parrent::__construct();
			$this->load->helper('url');
			$this->load->model('Profile');
		}


		function index(){
			$this->load->view('load_bootstrap/css');
			$this->load->view('front/register');
		}

		function Proses(){

			$this->load->model('Profile');
			$data['username'] = $this->input->post('username');
			$data['email'] = $this->input->post('email');
			$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);

			$this->Profile->insertAkun($data);

			$this->load->view('load_bootstrap/css');
			$this->load->view('front/register_success');
			// redirect(site_url('HomePage'));

		}

	}
	


 ?>