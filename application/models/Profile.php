<?php 

	class Profile extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function insertAkun($data){
			$this->db->insert('akun',$data);
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('akun');
			$this->db->order_by('id_akun');
			return $this->db->get();
		}

		function selectByCode($id_akun){
			$this->db->select('*');
			$this->db->from('akun');
			$this->db->where('id_akun',$id_akun);
			return $this->db->get();
		}

		function updateAkun($id_akun,$data){
			$this->db->where('id_akun',$id_akun);
			$this->db->update('akun',$data);
		}

		function deleteAkun($id_akun){
			$this->db->where('id_akun',$id_akun);
			$this->db->delete('akun');
		}

		function cekUsername($username){
			$this->db->distinct('*');
			$this->db->where('username',$username);
			$this->db->from('akun');
			return $this->db->get();
		}

		function getPassword($username){
			$this->db->distinct('password');
			$this->db->where('username',$username);
			$this->db->from('akun');
			return $this->db->get();
		}

		function getIdAkun($username){
			$this->db->select('id_akun');
			$this->db->where('username',$username);
			$this->db->from('akun');
			return $this->db->get();
		}
	}
 ?>