<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstchasis extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
			$this->load->view('master/bg_top');
			$data['new_id'] = $this->generate_id();
			$this->load->model('m_crud');
			$data['judul'] = 'Chasis';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_chasis();
			$this->load->view('master/mstchasis_view', $data);
		}
		function last_id()
	{
		
		$result = $this->db->select_max('MstChasID')->get('mstchas')->row();

		return $result;
	}

		public function tambah() {
			$data['judul'] = 'Chasis';
			$data['str'] = $this->m_crud->new_id('mstchas');
			$this->load->view('master/mstchasis_tambah', $data);
		}

		public function proses_tambah_chasis() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_chasis();
			redirect('mstchasis/index');
		}

		public function edit($id) {
			$data['judul'] = 'Chasis';
			$data['daftar'] = $this->m_crud->get_crud_edit_chasis($id);
			$this->load->view('master/mstchasis_edit',$data);
			$this->load->view('master/bg_top');
			$this->load->view('master/link');
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_chasis();
			redirect('mstchasis/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_chasis($id);
			redirect('mstchasis/index');
		}
		public function generate_id()
		{
		$dt = $this->m_crud->last_id();
		$id = $dt->MstChasID;
		$id++;
		$new_id = 'CH-'.sprintf("%03s", $id);

		return $new_id;
		}
}
?>
