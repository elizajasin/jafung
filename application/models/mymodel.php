<?php
class Mymodel extends CI_Model{
	public function getPejabat($where){
		$data = $this->db->query('select * from tbl_pejabat where id_akun='.$where);
		return $data->result_array();
	}
}
?>