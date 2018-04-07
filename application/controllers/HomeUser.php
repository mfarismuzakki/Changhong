<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeUser extends CI_Controller{

		function construct(){
			parrent::__construct();
			$this->load->helper('url');
			$this->load->model('Profile');
		}


		function index(){
			$this->load->view('load_bootstrap/css');
			$this->load->view('users/home');
			$this->load->view('template/footer');
		}

		function Profile(){
			$this->load->view('load_bootstrap/css');
			$this->load->view('users/profile');
			$this->load->view('template/footer');
		}
		

	}
	


 ?>