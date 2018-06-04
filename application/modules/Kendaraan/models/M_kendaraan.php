<?php

	class M_Kendaraan extends CI_Model
	{
		
		public function getLimit()
		{
			
		}
		public function get_kendaraan()
		{
			return $this->db->get('tbl_kendaraan');
		}
		public function insert_kendaraan($data)
		{
			$this->db->insert('tbl_kendaraan',$data);
			return true;
		}
	}
?>