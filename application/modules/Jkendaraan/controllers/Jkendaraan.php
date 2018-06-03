<?php
	/**
	 * 
	 */
	class Jkendaraan extends MX_Controller
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
			$this->load->view('jkendaraan',array('data' => $data));
		}
		public function lanjut($param)
		{
			$this->load->view('_head');
			$this->$param();
			$this->load->view('_foot');
		}
		public function tkendaraan()
		{
			echo "hay tkendaraan";
		}
	}
?>