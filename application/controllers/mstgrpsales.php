<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstgrpsales extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
		$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Group Sales';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_grpsales();
			$this->load->view('master/mstgrpsales_view', $data);
		}

		public function tambah() {
			$data['judul'] = 'Group Sales';
			$this->load->view('master/mstgrpsales_tambah', $data);
		}

		public function proses_tambah_grpsales() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_grpsales();
			redirect('mstgrpsales/index');
		}

		public function edit($id) {
			$data['judul'] = 'Group Sales';
			$data['daftar'] = $this->m_crud->get_crud_edit_grpsales($id);
			$this->load->view('master/mstgrpsales_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_grpsales();
			redirect('mstgrpsales/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_grpsales($id);
			redirect('mstgrpsales/index');
		}
	}
?>
