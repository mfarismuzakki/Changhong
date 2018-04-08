<?php 

	class Thread extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function insertThread($data){
			$this->db->insert('thread',$data);
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('thread');
			$this->db->order_by('id_thread');
			return $this->db->get();
		}

		function selectByCode($id_akun){
			$this->db->select('*');
			$this->db->from('thread');
			$this->db->where('owner',$id_akun);
			return $this->db->get();
		}

		function updateThread($id_thread,$data){
			$this->db->where('id_thread',$id_thread);
			$this->db->update('thread',$data);
		}

		function deleteThread($id_thread){
			$this->db->where('id_thread',$id_thread);
			$this->db->delete('thread');
		}

	}
 ?>