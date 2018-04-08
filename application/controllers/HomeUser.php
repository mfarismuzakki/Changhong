<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeUser extends CI_Controller{

		function construct(){
			parrent::__construct();
			$this->load->helper('form','url');
			$this->load->model('Profile');
		}


		function index(){
			if($this->session->loged_in){
				$this->load->model('Thread');
				$user['data'] = $this->Thread->selectByCode($this->session->id_akun->id_akun)->result(); 
				$this->load->view('load_bootstrap/css');
				$this->load->view('users/home',$user);
				$this->load->view('template/footer');
			}else{
				redirect('HomePage');
			}
		}

		function Profile(){
			if($this->session->loged_in){
				$this->load->model('Profile');
				$data['user'] = $this->Profile->selectByCode($this->session->userdata('id_akun')->id_akun)->row();
				$this->load->view('load_bootstrap/css');
				$this->load->view('users/profile',$data);
				$this->load->view('template/footer');
			}else{
				redirect('HomePage');
			}
		}

		function UpdateData(){
			if($this->session->loged_in){
				$this->load->model('Profile');
				$data['user'] = $this->Profile->selectByCode($this->session->userdata('id_akun')->id_akun)->row();
				$this->load->view('load_bootstrap/css');
				$this->load->view('users/profile_update',$data);
				$this->load->view('template/footer');
			}else{
				redirect('HomePage');
			}
		}
	
		function ProsesUpdateData(){
			$this->load->model('Profile');
			$this->load->helper("file");
			

			if(!is_dir('Foto/'.$this->session->username)){
				mkdir('./Foto/'.$this->session->username,0777,TRUE);
			}else{
				$path = 'Foto/'.$this->session->username;
				delete_files($path);
			}

			$config['upload_path'] = './Foto/'.$this->session->username;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 100;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $config['file_name'] = 'foto_'.$this->session->username;

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');

            
			$data['fullname'] = $this->input->post('fullname');
			$data['biodata'] = $this->input->post('biodata');
			$data['foto'] = base_url().'Foto/'.$this->session->username.'/'.$this->upload->data('file_name');

			
			$this->Profile->updateAkun($this->session->userdata('id_akun')->id_akun,$data);	


			$this->Profile();

		}

		function LogOut(){
			$this->session->sess_destroy();
			redirect('HomePage');	

		}

		function AddThread(){
				
			$this->load->model('Thread');

			$date = date_create();
			$time = date('Y-m-d H:i:s');


			$data['title'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');
			$data['owner'] = $this->session->id_akun->id_akun;
			$data['timeupload'] = $time;
			$this->Thread->InsertThread($data);

			redirect('HomeUser');
		}


	}
	


 ?>