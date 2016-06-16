<?php
class M_login extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function m_aksi($data){		
		$d = $this->db->get_where('tbl_login',$data);
		return $d->num_rows();
	}

	function get_id($where){
		$d = $this->db->query('select id from tbl_login where username = "'.$where.'"');
		foreach ($d->result() as $row)
		{
		   $dat = $row->id;
		}
		return $dat;
	}

	function get_nama($where){
		$d = $this->db->query('select nama from tbl_pejabat where id_akun = "'.$where.'"');
		foreach ($d->result() as $row)
		{
		   $dat = $row->nama;
		}
		return $dat;
	}
}
?>