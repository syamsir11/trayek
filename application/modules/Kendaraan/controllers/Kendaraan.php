<?php
	class Kendaraan extends MX_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('Trayek');
			$this->load->model('m_kendaraan');
		}
		public function index()
		{
			
		}

		public function path()
		{
			$method = $this->trayek->decode($this->uri->segment(2));
			if (method_exists($this,$method)) {
				if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
					if ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
						$this->$method();
						
					}
				}
				else{
					$this->lanjutan($method);
				}
			}
			else
				echo " Tidak ada";
		}
		public function kendaraan()
		{
			$data['kendaraan'] = $this->m_kendaraan->get_kendaraan()->result();
			$this->load->view('kendaraan',array('data' => $data));
		}
		public function lanjutan($param)
		{
			$this->load->view('_head');
			$this->$param();	
			$this->load->view('_foot');
		}
		public function tkendaraan()
		{
			$data  = array(
				'no_plat' => $this->input->post('no_plat'),
				'kode_pemilik' => $this->input->post('kode_pemilik'),
				'no_mesin' => $this->input->post('no_mesin'),
				'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
				'thn_buat' => $this->input->post('tahun_buat'),
				'uji_kir' =>$this->input->post('uji_kir'),
				'kode_rute' =>$this->input->post('kode_rute'),
				'daya_angkut' =>$this->input->post('daya_angkut')
			);
			echo"hay";
			// $this->m_kendaraan->insert_kendaraan($data);
		}
		
	}

?>