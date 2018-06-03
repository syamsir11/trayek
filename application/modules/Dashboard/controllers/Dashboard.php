<?php
	class Dashboard extends MX_Controller
	{
		function __construct()
		{
			$this->load->library('Trayek');
		}
		public function index()
		{
			echo modules::run('Layout/Layout/index',['page'=>'grafik']);
		}
	}
?>