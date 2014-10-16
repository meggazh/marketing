<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstsatuan extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
		$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Satuan';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_stn();
			$this->load->view('master/mstsatuan_view', $data);
		}

		public function tambah() {
			$data['judul'] = 'Apropal [+ADD]';
			$this->load->view('master/mstsatuan_tambah', $data);
		}

		public function proses_tambah_stn() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_stn();
			redirect('mstsatuan/index');
		}

		public function edit($id) {
			$data['judul'] = 'Data siswa [Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit_stn($id);
			$this->load->view('master/mstsatuan_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_stn();
			redirect('mstsatuan/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_stn($id);
			redirect('mstprice/index');
		}
	}
?>
