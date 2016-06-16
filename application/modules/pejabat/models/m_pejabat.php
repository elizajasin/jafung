<?php
class M_pejabat extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function getPjb($where=''){
		$data = $this->db->query('select * from tbl_pejabat where id_akun = "'.$where.'"');
		return $data->result_array();
	}

	function getDupak($where=''){
		$data = $this->db->query('select * from tbl_dupak where id_akun = "'.$where.'"');
		return $data->result_array();
	}

	function getPak($where=''){
		$data = $this->db->query('select * from tbl_dupak where id = "'.$where.'"');
		return $data->result_array();
	}

}
?>