<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mstemployee extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
			$this->load->view('master/bg_top');
			$this->load->model('m_crud'); //<--file model
			$data['judul'] = 'Employee';
			$this->load->view('master/link');
			$data['daftar'] = $this->m_crud->get_crud_all_employee();
			$this->load->view('master/mstemployee_view', $data); //<--file view
		}

		public function tambah() {
			$data['judul'] = 'Employee[Tambah]';
			$this->load->view('master/mstemployee_tambah', $data);//--file view mstemployee
		}

		public function proses_tambah_employee() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_employee();
			redirect('mstemployee/index');
		}

		public function edit($id) {
			$data['judul'] = 'Employee[Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit_employee($id); //--> file modelcrud & fungsi get_crud_edit_employee()
			$this->load->view('master/mstemployee_edit',$data);  //--> file 'mstemployee_edit' view
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);  //file-->modelcrud & fungsi 'edit_employee()'
			$this->m_crud->edit_employee(); //fungsi 'edit_employee()'
			redirect('mstemployee/index'); //kehalaman  index
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE); //-->file model crude
			$this->m_crud->hapus_employee($id); // fungsi 'hapus_employee()'
			redirect('mstemployee/index'); //kehalaman index
		}
		
	}
?>