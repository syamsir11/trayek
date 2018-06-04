<?php
	/**
	 * 
	 */
	class M_jalur extends CI_Model
	{
		public function get_jalur()
		{
			return $this->db->get('tbl_rute');
		}

		// public function save($tbl,$data)
		// {
		// 	return $this->db-;
		// }

		public function valid($tbl,$kondition)
		{
			return $this->db->get_where($tbl,$kondition)->num_rows();
		}

		public function save($tbl,$data)
		{
			return $this->db->insert($tbl,$data);
		}

		public function get($tbl,$kondition)
		{
			return $this->db->get_where($tbl,$kondition)->row();
		}

		public function delete($tbl,$kondition)
		{
			return $this->db->delete($tbl,$kondition);
		}

		public function update($tbl,$data,$kondition)
		{
			$this->db->where($kondition);
			return $this->db->update($tbl,$data);
		}
	}

?>