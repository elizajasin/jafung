<?php
class M_admin extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function getPjb(){
		$data = $this->db->query('select * from tbl_pejabat');
		return $data->result_array();
	}

	function InsertData($tableName,$data){
		$result = $this->db->insert($tableName,$data); 
		return $result;
	}

}
?>