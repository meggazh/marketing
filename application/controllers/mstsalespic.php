<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstsalespic extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
			$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Produk';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_salespic();
			$this->load->view('master/mstsalespic_view', $data);
		}

		public function tambah() {
			$data['judul'] = 'Apropal [+ADD]';
			$this->load->view('master/mstsalespic_tambah', $data);
		}

		public function proses_tambah_salespic() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_salespic();
			redirect('mstsalespic/index');
		}

		public function edit($id) {
			$data['judul'] = 'Data siswa [Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit_salespic($id);
			$this->load->view('master/mstsalespic_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_salespic();
			redirect('mstsalespic/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_salespic($id);
			redirect('mstsalespic/index');
		}
	}
?>
