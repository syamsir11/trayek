<?php
	/**
	 * 
	 */
	class M_jkendaraan  extends CI_Model
	{
		
		public function get_jkendaraan()
		{
			return $this->db->get('tbl_jenis_kendaraan');
		}
	}
?>