<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mstcrs extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_crud');
	}

	public function index() {
	$this->load->view('master/bg_top');
		$this->load->model('m_crud');
		$data['judul'] = 'Appropal';
		$this->load->view('master/link');
		$data['daftar'] = $this->m_crud->get_crud_all_crs();
		$this->load->view('master/mstcrs_view', $data);
	}
	
	public function tambah() 
	{
		$data['judul'] = 'Apropal [+ADD]';
		$this->load->view('master/mstproduk_tambah', $data);
	}

	public function proses_tambah_crs() {
		$this->load->model('m_crud','',TRUE);
		$this->m_crud->tambah_crs();
		redirect('mstcrs/index');
	}

	public function edit($id) {
		$data['judul'] = 'Currency';
		$data['daftar'] = $this->m_crud->get_crud_edit_crs($id);
		$this->load->view('master/mstcrs_edit',$data);
		$this->load->view('master/bg_top');
			$this->load->view('master/link');
	}

	public function proses_edit() {
		$this->load->model('m_crud','',TRUE);
		$this->m_crud->edit_crs();
		redirect('mstcrs/index');
	}

	public function hapus($id) {
		$this->load->model('m_crud','',TRUE);
		$this->m_crud->hapus_crs($id);
		redirect('mstcrs/index');
		
	}
	
}
?>
