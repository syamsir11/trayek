<?php
	/**
	* 
	*/
	class Kendaraan extends MX_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('Trayek');
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
			$this->load->view('kendaraan');
		}
		public function lanjutan($param)
		{
			$this->load->view('_head');
			$this->$param();	
			$this->load->view('_foot');
		}
		
	}

?>