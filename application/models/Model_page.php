<?php
class Model_page extends CI_Model
{

	function tampil($table){
		return $this->db->get_where($table);
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function edit_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}	

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}