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
	}
 ?>