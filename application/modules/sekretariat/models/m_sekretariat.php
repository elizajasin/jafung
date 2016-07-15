<?php
class M_sekretariat extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function getPjbAll(){
		$data = $this->db->query('select * from tbl_pejabat');
		return $data->result_array();
	}

	function getPjb($where=''){
		$data = $this->db->query('select * from tbl_pejabat where id_akun = "'.$where.'"');
		return $data->result_array();
	}
	
	function UpdateData($tableName,$data,$where){
		$result = $this->db->update($tableName,$data,$where); 
		return $result;
	}
}
?>