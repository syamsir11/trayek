<?php
/**
 * 
 */
class M_akunt extends CI_Model
{
	
	public function get_user()
	{
		return $this->db->get('tbl_user');
	}
}
?>