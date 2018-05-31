<?php
	class Mutama extends CI_Model
	{
		function get_kecamatan()
		{		
			return $this->db->get('kecamatan');
		}
		function getuser()
		{
			return $this->db->get('tbuser');
		}
		function get_kendaraan()
		{		
			return $this->db->get('kendaraan');
		}
		function tambahkec($data)
		{
			$this->db->insert('kecamatan', $data);
    		return TRUE;
		}
		function addrute($data)
		{
			$this->db->insert('rute',$data);
			return TRUE;
		}
		function tambahken($data)
		{
			$this->db->insert('kendaraan', $data);
    		return TRUE;
		}
		function hapuskec($where)
		{
			$this->db->where($where);
			$this->db->delete('kecamatan');	
		}
		function hapusken($where)
		{
			$this->db->where($where);
			$this->db->delete('kendaraan');	
			return TRUE;
		}
		function get_edt_kendaraan($id)
		{
			return $this->db->get_where('kendaraan',array('no_dd'=>$id));
		}
		function get_edt_kecamatan($id)
		{
			return $this->db->get_where('kecamatan',array('id_kecamatan'=>$id));
		}
		function get_edt_rute($id)
		{
			return $this->db->get_where('rute',array('kode'=>$id));
		}
		function get_rute()
		{
			return $this->db->get('rute');
		}
		function updatekec($data, $id){
		    $this->db->where('id_kecamatan',$id);
		    $this->db->update('kecamatan', $data);
		    return TRUE;
		}
		function updateken($data,$id)
		{
			$this->db->where('no_dd',$id);
			$this->db->update('kendaraan',$data);
			return TRUE;
		}
		function uprute($data,$id)
		{
			# code by Zem
			$this->db->where('id',$id);
			$this->db->update('rute',$data);
			return TRUE;
		}
	}
?>