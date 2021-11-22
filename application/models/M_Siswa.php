<?php
class M_Siswa extends CI_Model{
	function data_siswa(){
		$query = $this->db->query("select * from siswa");
		return $query;
	}
}
