<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstproduk extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
			$this->load->view('master/bg_top');
			$data['new_id'] = $this->generate_id();
			$this->load->model('m_crud');
			$data['judul'] = 'Produk';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_produk();
			$this->load->view('master/mstproduk_view', $data);
		}
		function last_id()
		{
		
		$result = $this->db->select_max('MstProductID')->get('mstproduct')->row();

		return $result;
		}

		public function tambah() {
			$data['judul'] = 'Apropal [+ADD]';
			$str = 'CS-00'.$this->m_crud->getLastID('mstproduct');
            $data['str'] = $str;
			$this->load->view('master/mstproduk_tambah', $data);
		}

		public function proses_tambah_produk() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_produk();
			redirect('mstproduk/index');
		}

		public function edit($id) {
			$data['judul'] = 'Data siswa [Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit_produk($id);
			$this->load->view('master/mstproduk_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_produk();
			redirect('mstproduk/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_produk($id);
			redirect('mstproduk/index');
		}
		public function generate_id()
		{
		$dt = $this->m_crud->last_id_prod();
		$id = $dt->MstProductID;
		$id++;
		$new_id = 'PR-'.sprintf("%03s", $id);

		return $new_id;
		}
	}
?>
