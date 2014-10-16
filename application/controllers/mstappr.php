<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstappr extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
			$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Chasis';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all();
			$this->load->view('master/mstappr_view', $data);
		}

		public function tambah() {
			$data['judul'] = 'Chasis';
			$this->load->view('master/mstappr_tambah', $data);
		}

		public function proses_tambah_appr() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_appr();
			redirect('mstappr/index');
		}

		public function edit($id) {
			$data['judul'] = 'Chasis';
			$data['daftar'] = $this->m_crud->get_crud_edit_appr($id);
			$this->load->view('master/mstappr_edit',$data);
			$this->load->view('master/bg_top');
			$this->load->view('master/link');
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_appr();
			redirect('mstappr/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_appr($id);
			redirect('mstappr/index');
		}
	}
?>
