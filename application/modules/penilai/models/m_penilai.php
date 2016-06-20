<?php
class M_penilai extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function getPjb($where=''){
		$data = $this->db->query('select * from tbl_pejabat');
		return $data->result_array();
	}

	function getDupak(){
		$data = $this->db->query('select * from tbl_dupak');
		return $data->result_array();
	}

}
?>