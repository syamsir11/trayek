<?php
	class Jalur extends MX_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('Trayek');
			$this->load->model('m_jalur');
		}
		public function path()
		{
			$method = $this->trayek->decode($this->uri->segment(2));

			$path = explode('/',$method);
			if (count($path) > 1) {
				$realPath = $path[0];
				$param = $path[1];
				if (method_exists($this,$realPath)) {
					if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
						if ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
							$this->$realPath($param);
						}
					}
					else{
						$this->lanjutan($realPath,$param);
					}
				}
				else
					echo " Tidak ada";
			}
			else{
				if (method_exists($this,$method)) {
					if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
						if ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
							$this->$method();
						}
					}
					else{
						$this->lanjutan($method,null);
					}
				}
				else
					echo " Tidak ada";
			}
			
		}
		public function jalur()
		{
			$data['jalur'] = $this->m_jalur->get_jalur()->result();
			$this->load->view('jalur',array('data' => $data));
		}
		public function lanjutan($param,$realParam)
		{
			$this->load->view('_head');
			if (is_null($realParam)) {
				$this->$param();	
			}	
			else{
				$this->$param($realParam);
			}
			$this->load->view('_foot');
		}

		public function simpan()
		{
			$data = array();
			if ($this->input->post()) {
				if (!empty(trim($this->input->post('kode_rute'))) || !empty(trim($this->input->post('tujuan')))) {
					if (is_numeric($this->input->post('kode_rute'))) {
						if ($this->m_jalur->valid('tbl_rute',['kode_rute'=>$this->input->post('kode_rute')]) > 0) {
							$data['execute'] = false;
							$data['message'] = 'Kode rute telah digunakan';
						}
						else{
							 
							$save = array('kode_rute'=>$this->input->post('kode_rute'),'tujuan'=>$this->input->post('tujuan'),'rute'=>$this->generateRute($this->input->post('rute[]')));
							
							if ($this->m_jalur->save('tbl_rute',$save)) {
								$data['execute'] = true;
								$new_data = $this->m_jalur->get('tbl_rute',['kode_rute'=>$this->input->post('kode_rute')]);
								$data['message'] = $new_data;
								$data['key_delete'] = $this->trayek->encode('hapus/'.$new_data->kode_rute);
								$data['key_edit'] = $this->trayek->encode('ubah/'.$new_data->kode_rute);
							}
							else{
								$data['execute'] = false;
								$data['message'] = 'Terjadi kesalahan input';
							}
						}
					}
					else{
						$data['execute'] = false;
						$data['message'] = 'Kode Rute Harus angka';
					}
				}
				else{
					$data['execute'] = false;
					$data['message'] = 'Data tidak boleh kosong';
				}
			}
			echo json_encode(array('respon'=>array($data)));
		}
		public function update()
		{
			$data = array();
			if ($this->input->post()) {
				$update = array('tujuan'=>$this->input->post('tujuan'),'rute'=>$this->generateRute($this->input->post('rute[]')));
				if ($this->m_jalur->update('tbl_rute',$update,['kode_rute'=>$this->input->post('kode_rute')])) {
					$data['execute'] = true;
					$new_data = $this->m_jalur->get('tbl_rute',['kode_rute'=>$this->input->post('kode_rute')]);
					$data['message'] = $new_data;
					$data['key_delete'] = $this->trayek->encode('hapus/'.$new_data->kode_rute);
					$data['key_edit'] = $this->trayek->encode('ubah/'.$new_data->kode_rute);
					$data['key'] = $this->input->post('kode_rute');
				}
				else{
					$data['execute'] = false;
					$data['message'] = 'Terjadi kesalahan input';
				}
			}
			echo json_encode(array('respon'=>array($data)));
		}
		public function generateRute($data)
		{
			$rute_ = array();
			$garis = 1;
			$kosong = 0;
			$ar_rute =  $this->input->post('rute[]');
			for ($i=0; $i < count($ar_rute); $i++) { 
				if (trim($ar_rute[$i]) != '') {
					$rute_[$kosong] = $ar_rute[$i];
					$kosong++;
				}
			}
			$realRute = null;
			for ($k=0; $k < count($rute_) ; $k++) { 
				$realRute .= $rute_[$k];
				if ($k < count($rute_) - 1) {
					$realRute .= ' - ';
				}
			}
			return $realRute;
		}
		public function hapus($param)
		{
			$data = array();
			if ($this->m_jalur->delete('tbl_rute',['kode_rute'=>$param])) {
				$data['execute'] = true;
				$data['message'] = 'Data terhapus';
				$data['key'] = $param;
			}
			else{
				$data['execute'] = false;
				$data['message'] = 'terhjadi kesalahan';
			}
			echo json_encode(array('respon'=>array($data)));
		}

		public function ubah($id)
		{
			$model = $this->m_jalur->get('tbl_rute',['kode_rute'=>$id]);
			$this->load->view('_form_edit',['model'=>$model]);
		}		
	}

?>