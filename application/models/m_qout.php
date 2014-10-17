<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_qout extends CI_Model{

	
	function __construct(){
		//$this->load->database('post',TRUE);
	}

	function save_master(){

		$TxnQuotHdrID		= $this->input->post('TxnQuotHdrID');
		$TxnQuotHdrNo		= $this->input->post('TxnQuotHdrNo');
		$TxnQuotHdrNoRev 	= $this->input->post('TxnQuotHdrNoRev');
		$TxnQuotHdrDate	= $this->input->post('TxnQuotHdrDate');
		$TxnQuotHdrRE	= $this->input->post('TxnQuotHdrRE');
		$TxnQuotHdrTermsTxt 		= $this->input->post('TxnQuotHdrTermsTxt');
		$TxnQuotHdrDiscount		= $this->input->post('TxnQuotHdrDiscount');
		$TxnQuotHdrRemarks		= $this->input->post('TxnQuotHdrRemarks');
		$TxnDrawHdrID 	= $this->input->post('TxnDrawHdrID');
		$MstCustID	= $this->input->post('MstCustID');
		$MstSalesPICID	= $this->input->post('MstSalesPICID');
		$MstApprID		= $this->input->post('MstApprID');
		$MstEmp		= $this->input->post('MstEmp');


		$data = array(
				'TxnQuotHdrID' 		=> null,
				'TxnQuotHdrNo' 		=>$TxnQuotHdrNo,
				'TxnQuotHdrNoRev'		=> $TxnQuotHdrNoRev,
				'TxnQuotHdrDate'	=>$TxnQuotHdrDate,
				'TxnQuotHdrRE'	=> $TxnQuotHdrRE,
				'TxnQuotHdrTermsTxt'	=> $TxnQuotHdrTermsTxt,
				'TxnQuotHdrDiscount'		=> $TxnQuotHdrDiscount,
				'TxnQuotHdrRemarks'	=> $TxnQuotHdrRemarks,
				'TxnDrawHdrID'	=> $TxnDrawHdrID,
				'MstCustID'	=> $MstCustID,
				'MstSalesPICID'		=> $MstSalesPICID,
				'MstApprID'		=> $MstApprID,
				'MstEmp'	=> $MstEmp
		);

		$this->db->insert('txnquothdr',$data);
		return $this->db->insert_id();
	}

	function save_detail(){

		$post 	= $this->input->post('data');
		$idbeli = $this->input->post('TxnQuotDtlNo');

		foreach($post as $key => $value){
			
			$data = array(
				'noid' 			=> null,
				'TxnQuotDtlNo'	=> $idbeli,
				'TxnQuotHdrNoRev'			=> $value[0],
				'TxnQuotDtlQty'		=> $value[1],
				'TxnQuotDtlUnitPrice'			=> $value[2],
				'TxnQuotDtlDiscount'			=> $value[3],
				'TxnQuotDtlDrawNo'		=> $value[4],
				'TxnQuotDtlDrawDate'			=> $value[5],
				'TxnQuotDtlRepair'			=> $value[6],
				'MstChasID'		=> $value[7],
				'MstProductID'			=> $value[7],
				'TxnQuotHdrID'			=> $value[8],
				'MstTypeOrderID'			=> $value[9],
				'MstSatID'		=> $value[10]
			);

			$this->db->insert('txnquotdtl',$data);
		}
	}
}