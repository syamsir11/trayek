<?php
	/**
	 * 
	 */
	class C_jkendaraan extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('Trayek');
			$this->load->model('m_jkendaraan');
		}
		public function index()
		{
			
		}
		public function path()
		{
			$method = $this->trayek->decode($this->uri->segment(2));
			if (method_exists($this,$method)) {
				if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
					if ($_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest') {
						$this->$method();
					}
				} else {
					$this->lanjut($method);
				}
			} else {
				echo"Fungsi Page Tidak Ditemukan";
			}
			
		}
		public function jkendaraan()
		{
			$data['jkendaraan'] = $this->m_jkendaraan->get_jkendaraan()->result();
			$this->load->view('V_jkendaraan',array('data' => $data));
		}
		public function lanjut($param)
		{
			$this->load->view('_head');
			$this->$param();
			$this->load->view('_foot');
		}
		public function tambah_jkendaraan()
		{
			$data = array(
				'kode_jenis' => $this->input->post('kode_jenis'),
				'jenis' =>$this->input->post('jenis_kendaraan'),
				'bbm' =>$this->input->post('bahan_bakar') 
			);
			$this->m_jkendaraan->add_jenis($data);
			echo "tambah_jkendaraan";
		}
		public function edit_jenis()
		{
			$kode_jenis = $this->input->post('id');
			$data = $this->m_jkendaraan->get_edit_kendaraan($kode_jenis)->row();
			echo json_encode(array('jenis_ken' => array('jkendaraan' => array($data))));
		}
		public function up_jenis_kendaraan()
		{
			$id = $this->input->post('kode_jenis');
			$data = array(
				'jenis' => $this->input->post('jenis'),
				'bbm' => $this->input->post('bbm')
			);
			$this->m_jkendaraan->up_jenis_kendaraan($id,$data);
		}
		public function hapusdata()
		{
			$kode =  $this->input->post('id');
			$id = array('kode_jenis' => $kode);
			$this->m_jkendaraan->hapusjenis($id);
		}
	}
?>