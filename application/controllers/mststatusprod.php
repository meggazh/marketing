<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mststatusprod extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
		$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Satuan';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_sts();
			$this->load->view('master/mststatusprod_view', $data);
		}

		public function tambah() {
			$data['judul'] = 'Apropal [+ADD]';
			$this->load->view('master/mststatusprod_tambah', $data);
		}

		public function proses_tambah_sts() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_sts();
			redirect('mststatusprod/index');
		}

		public function edit($id) {
			$data['judul'] = 'Data siswa [Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit_sts($id);
			$this->load->view('master/mststatusprod_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_sts();
			redirect('mststatusprod/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_sts($id);
			redirect('mststatusprod/index');
		}
	}
?>
