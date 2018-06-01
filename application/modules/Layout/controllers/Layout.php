<?php

	/**
	* 
	*/
	class Layout extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->library('Trayek');
		}
		public function index($param)
		{
			$this->load->view('_head');
			$this->load->view($param['page']);
			$this->load->view('_foot');
		}
	}
?>