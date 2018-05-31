<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('mutama');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['kendaraan'] =$this->mutama->get_kendaraan()->result();
		$this->load->view('index',array('data' => $data));
	}
	public function kendaraan()
	{
		$data['kendaraan'] =$this->mutama->get_kendaraan()->result();
		$this->load->view('kendaraan',array('data'=>$data));
	}
	public function tkendaraan()
	{
		$data = array
		(
			'no_dd' => $this->input->post('no_dd'),
			'jkendaraan' => $this->input->post('j_kendaraan'),
			'tujuan' => $this->input->post('tujuan'),
			'tproduksi' => $this->input->post('tahun_produksi')
		);
        $this->mutama->tambahken($data);
	}
	public function user()
	{
		$data['user'] = $this->mutama->getuser()->result();
		$this->load->view('user',array('data' => $data));
	}
	public function kecamatan()
	{
		$data['kecamatan'] =$this->mutama->get_kecamatan()->result();
		$this->load->view('kecamatan',array('data' => $data));
	}
	public function penerbitan()
	{
		$data['kecamatan'] =$this->mutama->get_kecamatan()->result();
		$this->load->view('penerbitan',array('data' => $data));
	}
	public function tkecamatan()
	{
		$data = $this->db->query("ALTER TABLE kecamatan AUTO_INCREMENT=0");
		$data = array
		(
			'nama_kecamatan' => $this->input->post('nama_kecamatan')
		);
        $this->mutama->tambahkec($data);
        redirect('utama/kecamatan');
	}
	public function upkecamatan()
	{
		$id =$this->input->post('id_kecamatan');
		$data = array
		(
			'nama_kecamatan' => $this->input->post('nama_kecamatan'),
			'id_kecamatan'=>$this->input->post('id_kecamatan')
		);
        $this->mutama->updatekec($data,$id);
        redirect('utama/kecamatan');
	}
	public function upkendaraan()
	{
		$id =$this->input->post('no_id');
		$data = array
		(
			'no_dd' => $this->input->post('no_dd'),
			'jkendaraan' => $this->input->post('j_kendaraan'),
			'tujuan' => $this->input->post('tujuan'),
			'tproduksi' => $this->input->post('tahun_produksi')
		);
        $this->mutama->updateken($data,$id);
	}
	public function hapuskec($id)
	{
		$id=base64_decode($this->uri->segment(3)); 
		$where = array('id_kecamatan' => $id);
		$this->mutama->hapuskec($where);
        redirect('utama/kecamatan');
	}
	public function hapusken($id)
	{
		// $id=$this->uri->segment(3); 
		// alert($id);
		$where = array('no_dd' => $id);
		$this->mutama->hapusken($where);
	}

	public function baru()
	{
		$data['kendaraan'] =$this->mutama->get_kendaraan()->result();
		$this->load->view('index',array('page' => '/baru','data' => $data));	
	}
	public function rute()
	{
		$data['rute'] = $this->mutama->get_rute()->result();
		$this->load->view('rute', array('data' =>$data));
	}
	public function edtkec($id)
	{
		/* Baris Pertama*/ $data = $this->mutama->get_edt_kecamatan($id)->row(); //row() ketika data yang akan ditampilkan cuma 1
		 echo json_encode(array('respon' => array('kecamatan' => array($data))));
		//perintah diatas akan menghasilkan output {"respon":{"kendaraan":[{  "no_dd":"DD1234","NO_STNK":"123456" }]}}
	}
	public function akbar($no_dd)
	{
		/* Baris Pertama*/ $data = $this->mutama->get_edt_kendaraan($no_dd)->row(); //row() ketika data yang akan ditampilkan cuma 1
		 echo json_encode(array('respon' => array('kendaraan' => array($data))));
		//perintah diatas akan menghasilkan output {"respon":{"kendaraan":[{  "no_dd":"DD1234","NO_STNK":"123456" }]}}
	}
	public function edtrute($id)
	{
		/* Baris Pertama*/ $data = $this->mutama->get_edt_rute($id)->row(); //row() ketika data yang akan ditampilkan cuma 1
		 echo json_encode(array('respon' => array('rute' => array($data))));
		//perintah diatas akan menghasilkan output {"respon":{"kendaraan":[{  "no_dd":"DD1234","NO_STNK":"123456" }]}}
	}
	public function addrute()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'tujuan' => $this->input->post('tujuan'),
			'rute' => $this->input->post('rutee')
		);
		$this->mutama->addrute($data);
	}
	public function uprute($id)
	{
		$id = $this->input->post('id');
		$data = array(
			'kode' => $this->input->post('kode'),
			'tujuan' =>$this->input->post('tujuan'),
			'rute' =>$this->input->post('rute')
		);
		$this->mutama->uprute($data,$id);
	}
}
?>