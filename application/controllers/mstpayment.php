<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstpayment extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
		$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Payment';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_pay();
			$this->load->view('master/mstpayment_view', $data);
		}

		public function tambah() {
			$data['judul'] = 'Payment';
			$this->load->view('master/mstpayment_tambah', $data);
		}

		public function proses_tambah_pay() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_pay();
			redirect('mstpayment/index');
		}

		public function edit($id) {
			$data['judul'] = 'Payment';
			$data['daftar'] = $this->m_crud->get_crud_edit_pay($id);
			$this->load->view('master/mstpayment_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_pay();
			redirect('mstpayment/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_pay($id);
			redirect('mstpayment/index');
		}
	}
?>
