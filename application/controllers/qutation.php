<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Qutation extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		} 

		public function index() {
			//$this->load->model('m_crud');
			//$data['judul'] = 'Data Barang';
			//$data['daftar'] = $this->m_crud->get_crud_all();
			$this->load->model('m_crud');
			$data['cs'] = $this->m_crud->get_crud_all_cus();
			$data['salespic'] =$this->m_crud->get_crud_all_salespic();
			$data['chasis'] =$this->m_crud->get_crud_all_chasis();
			$data['produk'] =$this->m_crud->get_crud_all_produk();
			$data['satuan'] =$this->m_crud->get_crud_all_stn();
			$this->load->view('trx/quotation_view', $data);
		}

		function tambah() {
		$data = array(
				'TxnQuotHdrID' => $this->input->post('TxnQuotHdrID'),
				'TxnQuotHdrNo' => $this->input->post('TxnQuotHdrNo'),
				'TxnQuotHdrNoRev' => $this->input->post('TxnQuotHdrNoRev'),
				'TxnQuotHdrDate' => $this->input->post('TxnQuotHdrDate'),
				'TxnQuotHdrRE' => $this->input->post('TxnQuotHdrRE'),
				'TxnQuotHdrTermsTxt' => $this->input->post('TxnQuotHdrTermsTxt'),
				'TxnQuotHdrDiscount' => $this->input->post('TxnQuotHdrDiscount'),
				'TxnQuotHdrRemarks' => $this->input->post('TypeTrn'),
				'TxnDrawHdrID' => $this->input->post('TxnDrawHdrID'),
				'MstCustID' => $this->input->post('MstCustID'),
				'MstSalesPICID' => $this->input->post('MstSalesPICID'),
				'MstApprID' => $this->input->post('MstApprID'),
				'MstEmp'=>$this->input->post('MstEmp')
	
				);
			$this->db->insert('txnquothdr', $data);
			$id = $this->db->insert_id($query);
			$kp2 = $this->input->post('TxnQuotHdrID');
			$data2[] = array();
			foreach($kp2 AS $c => $val){
				$data2[] = array(
                    'TxnQuotDtlID' => $_POST['TxnQuotDtlID'][$c],
                    'TxnQuotDtlNo' => $_POST['TxnQuotDtlNo'][$c],
                    'TxnQuotHdrNoRev' => $_POST['TxnQuotHdrNoRev'][$c],
                    'TxnQuotDtlQty' => $_POST['TxnQuotDtlQty'][$c],
                    'TxnQuotDtlUnitPrice' => $_POST['TxnQuotDtlUnitPrice'][$c],
                    'TxnQuotDtlDiscount' => $_POST['TxnQuotDtlDiscount'][$c],
                    'TxnQuotDtlDrawNo' => $_POST['TxnQuotDtlDrawNo'][$c],
					'TxnQuotDtlDrawDate' => $_POST['TxnQuotDtlDrawDate'][$c],
					'TxnQuotDtlRepair' => $_POST['TxnQuotDtlRepair'][$c],
					'MstChasID' => $_POST['MstChasID'][$c],
					'MstProductID' => $_POST['MstProductID'][$c],
					'TxnQuotHdrID' => $_POST['TxnQuotHdrID'][$c],
                    'MstTypeOrderID' => $_POST['MstTypeOrderID'][$c],
					'MstSatID' => $_POST['MstSatID'][$c],
					'MstEmp' => $_POST['MstEmp'][$c]
						
				);
			}
			$this->db->insert_batch('txnquotdtl', $data2);
			$id_detail = $this->db->insert_id();
			
			redirect('qutation');
		}
			function form() {
			$this->load->view('tambah.php' );
		}
	
	}
?>
