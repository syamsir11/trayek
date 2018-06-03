<?php
	/**
	 * 
	 */
	class M_jalur extends CI_Model
	{
		public function getLimit()
		{
			
		}
		public function get_jalur()
		{
			return $this->db->get('tbl_rute');
		}
	}

?>