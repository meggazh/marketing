<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstcus extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
		$this->load->view('master/bg_top');
			$data['new_id'] = $this->generate_id();
			$this->load->model('m_crud');
			$data['judul'] = 'Customer';
			$this->load->view('master/link');
			$data['bayar'] = $this->m_crud->get_crud_all_pay();
			$data['daftar'] = $this->m_crud->get_crud_all_cus();
			$this->load->view('master/mstcust_view', $data);
		}
		
		public function test()
{
		$new_id = $this->m_crud->getLastID('mstproduct');

		echo $new_id;
}

		public function tambah() {
			$data['judul'] = 'Customer';
			$data['str'] = $this->m_crud->new_id('mstcust');
			$this->load->view('master/mstcust_tambah', $data);
		}

		public function proses_tambah_cus() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_cus();
			redirect('mstcus/index');
		}

		public function edit($id) {
			$data['judul'] = 'Customer';
			$data['daftar'] = $this->m_crud->get_crud_edit_cus($id);
			$this->load->view('master/mstcust_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_cus();
			redirect('mstcus/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_cus($id);
			redirect('mstcus/index');
		}
		public function generate_id()
		{
		$dt = $this->m_crud->last_id_cus();
		$id = $dt->MstCustID;
		$id++;
		$new_id = 'CS-'.sprintf("%03s", $id);

		return $new_id;
		}
	}
?>
