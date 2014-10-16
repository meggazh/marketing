<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstprices extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model(array('m_crud','barang'));
		}

		public function index() {
			$this->load->view('master/bg_top');
			$this->load->model('m_crud');
			$data['judul'] = 'Price';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_price();
			$this->load->view('master/mstprice_view', $data);
		}
		public function produk (){
		$data['produk']=$this->load->barang->get_all();
		print_r($data['produk']; exit();
		$this->load->view('master/mstprice_view', $data);
		
		}
		public function tambah() {
			$data['judul'] = 'Apropal [+ADD]';
			$this->load->view('master/mstprice_tambah', $data);
		}

		public function proses_tambah_price() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_price();
			redirect('mstprice/index');
		}

		public function edit($id) {
			$data['judul'] = 'Data siswa [Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit_price($id);
			$this->load->view('master/mstprice_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_pay();
			redirect('mstprice/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_price($id);
			redirect('mstprice/index');
		}
	}
?>
