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
	public function add_jenis($data)
	{
		$this->db->insert('tbl_jenis_kendaraan',$data);
		return TRUE;
	}
	public function get_edit_kendaraan($kode)
	{
		return $this->db->get_where('tbl_jenis_kendaraan', array('kode_jenis' => $kode));
	}
	public function up_jenis_kendaraan($where,$data)
	{
		$this->db->where('kode_jenis',$where);
		$this->db->update('tbl_jenis_kendaraan',$data);
		return TRUE;
	}
	public function hapusjenis($id)
	{
		$this->db->where($id);
		$this->db->delete('tbl_jenis_kendaraan');
		return TRUE;
	}
}
?>