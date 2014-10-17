<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class drawsz extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}
	
	public function ambil_data($kode) 
	{
		$q = $this->db->query("select * from mstcust where MstCustIDName=$kode");
		return $q;
	}
	function save_master($iduser){

		$TxnDrawHdrNo		= $this->input->post('TxnDrawHdrNo');
		$TxnDrawHdrStatus	= $this->input->post('TxnDrawHdrStatus');
		$Tgl				= $this->input->post('Tgl');
		$MstSalesPICID		= $this->input->post('salespic');
		$MstCustID			= $this->input->post('customer');
		//$MstEmpID 		= $this->input->post('suplier');
		//$total 		= $this->input->post('tot-hrg');
		//$total 		= $this->input->post('tot-hrg');
		//$total 		= $this->input->post('tot-hrg');


		$data = array(
				'TxnDrawHdrID' 		=> null,
				'TxnDrawHdrNo' 		=> $TxnDrawHdrNo,
				'Tgl'				=> $Tgl,
				'TxnDrawHdrStatus'	=> $TxnDrawHdrStatus,
				'MstEmpID'			=> $MstEmpID,
				'MstSalesPICID'		=> $MstSalesPICID,
				'MstCustID'			=> $MstCustID
				//'total'		=> $total,
				//'iduser'	=> $iduser
		);

		$this->db->insert('txndrawhdr',$data);
		return $this->db->insert_id();
	}
	function save_detail(){

		$post 	= $this->input->post('data');
		$idbeli = $this->input->post('TxnDrawHdrID');

		foreach($post as $key => $value){
			
			$data = array(
				'TxnDrawHdrID' 		=> null,
				'TxnDrawHdrID'		=> $idbeli,
				'TxnDrawDtlNoRev'	=> $value[0],
				'TxnDrawDtlDate'	=> $value[1],
				'TxnDrawDtlRemarks'	=> $value[2],
				'TxnDrawDtlStatus'	=> $value[3],
				//'subtotal'			=> $value[4]
			);

			$this->db->insert('txndrawdtl',$data);
		}
	}
}
