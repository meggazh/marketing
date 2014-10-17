<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quot extends CI_Controller
{
	function __construct(){
		parent::__construct();
		//$this->load->library(array('auth','Datatables'));
		//$this->load->helper('notif');
		$this->load->model(array('m_crud','m_qout'));
		
	}

	function index(){

		//$this->template->load('default','page/vpembelian');
		$data['cs'] = $this->m_crud->get_crud_all_cus();
		$data['salespic'] =$this->m_crud->get_crud_all_salespic();
		$data['chasis'] =$this->m_crud->get_crud_all_chasis();
		$data['produk'] =$this->m_crud->get_crud_all_produk();
		$data['satuan'] =$this->m_crud->get_crud_all_stn();
	}


	public function save_master(){

		$last_id = $this->m_pembelian->save_master($iduser);

		echo json_encode(array('lastid'=>$last_id));
	}

	function save_detail(){

		$this->m_pembelian->save_detail();
	}

}