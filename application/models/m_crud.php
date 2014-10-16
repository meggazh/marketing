<?php
	class M_crud extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		function get_crud_all() {
			$query=$this->db->query("select * from mstappr ");
			return $query->result();
		}
		
		function tambah_appr() {
			$data = array(
				'MstApprID'=>$this->input->post('MstApprID'),
				'MstAppr1' =>$this->input->post('MstAppr1'),
				'MstAppr2' =>$this->input->post('MstAppr2'),
				'MstAppr3' =>$this->input->post('MstAppr3'),
				'MstAppr4' =>$this->input->post('MstAppr4'),
			);
			return $this->db->insert('mstappr', $data);
		}
		function get_crud_edit_appr($id) {
				$this->db->where('MstApprID',$id);
				$query = $this->db->get('mstappr');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_appr() {
			$id = $this->input->post('MstApprID');
			$data = array (
			'MstApprID'=>$this->input->post('MstApprID'),
				'MstAppr1' =>$this->input->post('MstAppr1'),
				'MstAppr2' =>$this->input->post('MstAppr2'),
				'MstAppr3' =>$this->input->post('MstAppr3'),
				'MstAppr4' =>$this->input->post('MstAppr4'),
			);
			$this->db->where('MstApprID',$id);
			$this->db->update('mstappr',$data);
		}
		function hapus_appr($id){
			$this->db->where('MstApprID',$id);
			$this->db->delete('mstappr');
		}
			
		// ini koding chasis//

			
		function get_crud_all_chasis() {
			$query=$this->db->query("select * from mstchas");
			return $query->result();
		
		}
		function last_id()
		{
		
		$result = $this->db->select_max('MstChasID')->get('mstchas')->row();

		return $result;
		}
		function tambah_chasis() {
			$data = array(
				'MstChasNo' => $this->input->post('MstChasNo'),
				'MStChasMaker' => $this->input->post('MStChasMaker'),
				'MStChasModel' => $this->input->post('MStChasModel'),
				'MStChasType' => $this->input->post('MStChasType')
			);
			return $this->db->insert('mstchas', $data);
		}
		function get_crud_edit_chasis($id) {
				$this->db->where('MstChasID',$id);
				$query = $this->db->get('mstchas');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_chasis() {
			$id = $this->input->post('MstChasID');
			$data = array (
				'MstChasNo' => $this->input->post('MstChasNo'),
				'MStChasMaker' => $this->input->post('MStChasMaker'),
				'MStChasModel' => $this->input->post('MStChasModel'),
				'MStChasType' => $this->input->post('MStChasType')
			);
			$this->db->where('MstChasID',$id);
			$this->db->update('mstchas',$data);
		}
		function hapus_chasis($id){
			$this->db->where('MstChasID',$id);
			$this->db->delete('mstchas');
		}
		
		//ini koding currency
		
		function get_crud_all_crs() {
			$query=$this->db->query("SELECT * FROM  mstcrs ");
			return $query->result();
		
		}
 
		function tambah_crs() {
			$data = array(
				'MstCrsID' => $this->input->post('MstCrsID'),
				'MstCrsName	' => $this->input->post('MstCrsName'),
				'MstCrsSym' => $this->input->post('MstCrsSym')
			);
			return $this->db->insert('mstcrs', $data);
		}
		function get_crud_edit_crs($id) {
				$this->db->where('MstCrsID',$id);
				$query = $this->db->get('mstcrs');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_crs() {
			$id = $this->input->post('MstCrsID');
			$data = array (
				'MstCrsName' => $this->input->post('MstCrsName'),
				'MstCrsSym' => $this->input->post('MstCrsSym')
			);
			$this->db->where('MstCrsID',$id);
			$this->db->update('mstcrs',$data);
		}
		function hapus_crs($id){
			$this->db->where('MstCrsID',$id);
			$this->db->delete('mstcrs');
		}
			//ini koding customer
		function get_crud_all_cus() {
			$query=$this->db->query("select * from mstcust");
			return $query->result();
		
		}
		 function last_id_cus()
		{
		
		$result = $this->db->select_max('MstCustID')->get('mstcust')->row();

		return $result;
		}
		
		function tambah_cus() {
			$data = array(
				'MstCustNo' => $this->input->post('$MstCustNo'),
				'MstCustIDName' => $this->input->post('MstCustIDName'),
				'MstCustIDAbbr' => $this->input->post('MstCustIDAbbr'),
				'MstCustIDAddress1' => $this->input->post('MstCustIDAddress1'),
				'MstCustIDAddress2' => $this->input->post('MstCustIDAddress2'),
				'MstCustIDAddress3' => $this->input->post('MstCustIDAddress3'),
				'MstCustIDPIC1' => $this->input->post('MstCustIDPIC1'),
				'MstCustIDPIC2' => $this->input->post('MstCustIDPIC2'),
				'MstCustIDPIC3' => $this->input->post('MstCustIDPIC3'),
				'MstCustIDNoTlp' => $this->input->post('MstCustIDNoTlp'),
				'MstCustIDNofax' => $this->input->post('MstCustIDNofax'),
				'MstCustIDPICEmail1' => $this->input->post('MstCustIDPICEmail1'),
				'MstCustIDPICEmail2' => $this->input->post('email2'),
				'MstPayID' => $this->input->post('MstPayID')
			);
			return $this->db->insert('mstcust', $data);
		}
		function get_crud_edit_cus($id) {
				$this->db->where('MstCustID',$id);
				$query = $this->db->get('mstcust');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_cus() {
			$id = $this->input->post('MstCustID');
			$data = array (
				'MstCustNo' => $this->input->post('$MstCustNo'),
				'MstCustIDName' => $this->input->post('MstCustIDName'),
				'MstCustIDAbbr' => $this->input->post('MstCustIDAbbr'),
				'MstCustIDAddress1' => $this->input->post('MstCustIDAddress1'),
				'MstCustIDAddress2' => $this->input->post('MstCustIDAddress2'),
				'MstCustIDAddress3' => $this->input->post('MstCustIDAddress3'),
				'MstCustIDPIC1' => $this->input->post('MstCustIDPIC1'),
				'MstCustIDPIC2' => $this->input->post('MstCustIDPIC2'),
				'MstCustIDPIC3' => $this->input->post('MstCustIDPIC3'),
				'MstCustIDNoTlp' => $this->input->post('MstCustIDNoTlp'),
				'MstCustIDNofax' => $this->input->post('MstCustIDNofax'),
				'MstCustIDPICEmail1' => $this->input->post('MstCustIDPICEmail1'),
				'MstCustIDPICEmail2' => $this->input->post('MstCustIDPICEmail2'),
				'MstPayID' => $this->input->post('MstPayID')
			);
			$this->db->where('MstCustID',$id);
			$this->db->update('mstcust',$data);
		}
		function hapus_cus($id){
			$this->db->where('MstCustID',$id);
			$this->db->delete('mstcust');
		}
		//ini koding grpsales
			function get_crud_all_grpsales() {
			$query=$this->db->query("select * from mstgrpsales");
			return $query->result();
		
		}
		function tambah_grpsales() {
			$data = array(
				'MstGRPSalesID' => $this->input->post('MstGRPSalesID'),
				'MstGRPSalesDesc' => $this->input->post('MstGRPSalesDesc')
			);
			return $this->db->insert('mstgrpsales', $data);
		}
		function get_crud_edit_grpsales($id) {
				$this->db->where('MstGRPSalesID',$id);
				$query = $this->db->get('mstgrpsales');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_grpsales() {
			$id = $this->input->post('MstGRPSalesID');
			$data = array (
				'MstGRPSalesID' => $this->input->post('MstGRPSalesID'),
				'MstGRPSalesDesc' => $this->input->post('MstGRPSalesDesc')
			);
			$this->db->where('MstGRPSalesID',$id);
			$this->db->update('mstgrpsales',$data);
		}
		function hapus_grpsales($id){
			$this->db->where('MstGRPSalesID',$id);
			$this->db->delete('mstgrpsales');
		}
		//ini koding mstpayment
		function get_crud_all_pay() {
			$query=$this->db->query("select * from  mstpay");
			return $query->result();
		
		}
		function tambah_pay() {
			$data = array(
				'MstPayID' => $this->input->post('MstPayID'),
				'MstPaySyarat' => $this->input->post('MstPaySyarat')
			);
			return $this->db->insert('mstpay', $data);
		}
		function get_crud_edit_pay($id) {
				$this->db->where('MstPayID',$id);
				$query = $this->db->get('mstpay');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_pay() {
			$id = $this->input->post('MstPayID');
			$data = array (
				'MstPayID' => $this->input->post('MstPayID'),
				'MstPaySyarat' => $this->input->post('MstPaySyarat')
			);
			$this->db->where('MstPayID',$id);
			$this->db->update('mstpay',$data);
		}
		function hapus_pay($id){
			$this->db->where('MstPayID',$id);
			$this->db->delete('mstpay');
		}
		//ini koding price
		function get_crud_all_price() {
			$query=$this->db->query("select * from mstprice");
			return $query->result();
		
		}
		function tambah_price() {
			$data = array(
				'MstPriceID' => $this->input->post('MstPriceID'),
				'MstPriceUnitPrice' => $this->input->post('MstPriceUnitPrice'),
				'MstPriceExpiredDate' => $this->input->post('MstPriceExpiredDate'),
				'MstPriceStatus' => $this->input->post('MstPriceStatus'),
				'MstProductID' => $this->input->post('MstProductID')
			);
			return $this->db->insert('mstprice', $data);
		}
		function get_crud_edit_price($id) {
				$this->db->where('MstPriceID',$id);
				$query = $this->db->get('mstprice');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_price() {
			$id = $this->input->post('MstPriceID');
			$data = array (
				'MstPriceID' => $this->input->post('MstPriceID'),
				'MstPriceUnitPrice' => $this->input->post('MstPriceUnitPrice'),
				'MstPriceExpiredDate' => $this->input->post('MstPriceExpiredDate'),
				'MstPriceStatus' => $this->input->post('MstPriceStatus')
			);
			$this->db->where('MstPriceID',$id);
			$this->db->update('mstprice',$data);
		}
		function hapus_price($id){
			$this->db->where('MstPriceID',$id);
			$this->db->delete('mstprice');
		}
		// ini koding produk
		function get_crud_all_produk() {
			$query=$this->db->query("select * from mstproduct");
			return $query->result();
		
				}
		function last_id_prod()
		{
		
		$result = $this->db->select_max('MstProductID')->get('mstproduct')->row();

		return $result;
		}
		function tambah_produk() {
			$data = array(
				'MstProductID' =>$this->input->post('MstProductID'),
				'MstProductType' => $this->input->post('MstProductType'),
				'MstProductGroupingSize' => $this->input->post('MstProductGroupingSize'),
				'MstProductSize' => $this->input->post('MstProductSize'),
				'MstProductVariant' => $this->input->post('MstProductVariant'),
				'MstProductProductCode' => $this->input->post('MstProductProductCode'),
				'MstProductDescription' => $this->input->post('MstProductDescription'),
				'MstProductInnerSizeL' => $this->input->post('MstProductInnerSizeL'),
				'MstProductInnerSizeW' => $this->input->post('MstProductInnerSizeW'),
				'MstProductInnerSizeH' => $this->input->post('MstProductInnerSizeH'),
				'MstProductOuterSizeL' => $this->input->post('MstProductOuterSizeL'),
				'MstProductOuterSizeW' => $this->input->post('MstProductOuterSizeW'),
				'MstProductOuterSizeH' => $this->input->post('MstProductOuterSizeH'),
				'MstSpecID' => $this->input->post('MstSpecID')
			);
			return $this->db->insert('mstproduct', $data);
		}
		function get_crud_edit_produk($id) {
				$this->db->where('MstProductID',$id);
				$query = $this->db->get('mstproduct');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_produk() {
			$id = $this->input->post('MstProductID');
			$data = array (
				'MstProductID' => $this->input->post('MstProductID'),
				'MstProductType' => $this->input->post('MstProductType'),
				'MstProductGroupingSize' => $this->input->post('MstProductGroupingSize'),
				'MstProductSize' => $this->input->post('MstProductSize'),
				'MstProductVariant' => $this->input->post('MstProductVariant'),
				'MstProductProductCode' => $this->input->post('MstProductProductCode'),
				'MstProductDescription' => $this->input->post('MstProductDescription'),
				'MstProductInnerSizeL' => $this->input->post('MstProductInnerSizeL'),
				'MstProductInnerSizeW' => $this->input->post('MstProductInnerSizeW'),
				'MstProductInnerSizeH' => $this->input->post('MstProductInnerSizeH'),
				'MstProductOuterSizeL' => $this->input->post('MstProductOuterSizeL'),
				'MstProductOuterSizeW' => $this->input->post('MstProductOuterSizeW'),
				'MstProductOuterSizeH' => $this->input->post('MstProductOuterSizeH'),
				'MstSpecID' => $this->input->post('MstSpecID')
			);
			$this->db->where('MstProductID',$id);
			$this->db->update('mstproduct',$data);
		}
		function hapus_produk($id){
			$this->db->where('MstProductID',$id);
			$this->db->delete('mstproduct');
		}
		//ini koding sales PIC
		function get_crud_all_salespic() {
			$query=$this->db->query("select * from mstsalespic");
			return $query->result();
		
		}
		function tambah_salespic() {
			$data = array(
				'MstSalesPICID' => $this->input->post('MstSalesPICID'),
				'MstSalesPICName' => $this->input->post('MstSalesPICName'),
				'MstSalesPICPICEmail1' => $this->input->post('MstSalesPICPICEmail1'),
				'MstSalesPICPICEmail2' => $this->input->post('MstSalesPICPICEmail2'),
				'MstSalesPICPICEmail3' => $this->input->post('MstSalesPICPICEmail3')
			);
			return $this->db->insert('mstsalespic', $data);
		}
		function get_crud_edit_salespic($id) {
				$this->db->where('MstSalesPICID',$id);
				$query = $this->db->get('mstsalespic');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_salespic() {
			$id = $this->input->post('MstSalesPICID');
			$data = array (
				'MstSalesPICID' => $this->input->post('MstSalesPICID'),
				'MstSalesPICName' => $this->input->post('MstSalesPICName'),
				'MstSalesPICPICEmail1' => $this->input->post('MstSalesPICPICEmail1'),
				'MstSalesPICPICEmail2' => $this->input->post('MstSalesPICPICEmail2'),
				'MstSalesPICPICEmail3' => $this->input->post('MstSalesPICPICEmail3')
			);
			$this->db->where('MstSalesPICID',$id);
			$this->db->update('mstsalespic',$data);
		}
		function hapus_salespic($id){
			$this->db->where('MstSalesPICID',$id);
			$this->db->delete('mstsalespic');
		}
		//ini koding satuan
		function get_crud_all_stn() {
			$query=$this->db->query("select * from mstsatuan");
			return $query->result();
		
		}
		function tambah_stn() {
			$data = array(
				'MstSatID' => $this->input->post('MstSatID'),
				'MstSatName	' => $this->input->post('MstSatName'),
				'MstSatAbbr' => $this->input->post('MstSatAbbr')
			);
			return $this->db->insert('mstsatuan', $data);
		}
		function get_crud_edit_stn($id) {
				$this->db->where('MstSatID',$id);
				$query = $this->db->get('mstsatuan');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_stn() {
			$id = $this->input->post('MstSatID');
			$data = array (
				'MstSatID' => $this->input->post('MstSatID'),
				'MstSatName	' => $this->input->post('MstSatName'),
				'MstSatAbbr' => $this->input->post('MstSatAbbr')
			);
			$this->db->where('MstSatID',$id);
			$this->db->update('mstsatuan',$data);
		}
		function hapus_stn($id){
			$this->db->where('MstSatID',$id);
			$this->db->delete('mstsatuan');
		}
		// ini koding spec
		function get_crud_all_spec() {
			$query=$this->db->query("select * from mstspec");
			return $query->result();
		
		}
		function tambah_spec() {
			$data = array(
				'idMstSpec' => $this->input->post('idMstSpec'),
				'MstSpecDesc' => $this->input->post('MstSpecDesc'),
				'MstSpecGaransiTxt' => $this->input->post('MstSpecGaransiTxt'),
				'MstSpecIncludeTxt' => $this->input->post('MstSpecIncludeTxt'),
				'MstSpecExcludeTxt' => $this->input->post('MstSpecExcludeTxt'),
				'MstSpecSpecialSpecTxt' => $this->input->post('MstSpecSpecialSpecTxt')
			);
			return $this->db->insert('mstspec', $data);
		}
		function get_crud_edit_spec($id) {
				$this->db->where('idMstSpec',$id);
				$query = $this->db->get('mstspec');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_spec() {
			$id = $this->input->post('idMstSpec');
			$data = array (
				'idMstSpec' => $this->input->post('idMstSpec'),
				'MstSpecDesc' => $this->input->post('MstSpecDesc'),
				'MstSpecGaransiTxt' => $this->input->post('MstSpecGaransiTxt'),
				'MstSpecIncludeTxt' => $this->input->post('MstSpecIncludeTxt'),
				'MstSpecExcludeTxt' => $this->input->post('MstSpecExcludeTxt'),
				'MstSpecSpecialSpecTxt' => $this->input->post('MstSpecSpecialSpecTxt')
			);
			$this->db->where('idMstSpec',$id);
			$this->db->update('mstspec',$data);
		}
		function hapus_spec($id){
			$this->db->where('idMstSpec',$id);
			$this->db->delete('mstspec');
		}
		// ini koding status produksi
		
		function get_crud_all_sts() {
			$query=$this->db->query("select * from mststatusprod");
			return $query->result();
		
		}
		function tambah_sts() {
			$data = array(
				'idMstStatusProd' => $this->input->post('idMstStatusProd'),
				'MstStatusProdGroup' => $this->input->post('MstStatusProdGroup'),
				'MstStatusProdSubGroup' => $this->input->post('MstStatusProdSubGroup'),
				'MstStatusProdJob' => $this->input->post('MstStatusProdJob')
	
			);
			return $this->db->insert('mststatusprod', $data);
		}
		function get_crud_edit_sts($id) {
				$this->db->where('idMstStatusProd',$id);
				$query = $this->db->get('mststatusprod');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_sts() {
			$id = $this->input->post('idMstStatusProd');
			$data = array (
				'idMstStatusProd' => $this->input->post('idMstStatusProd'),
				'MstStatusProdGroup' => $this->input->post('MstStatusProdGroup'),
				'MstStatusProdSubGroup' => $this->input->post('MstStatusProdSubGroup'),
				'MstStatusProdJob' => $this->input->post('MstStatusProdJob')
			);
			$this->db->where('idMstStatusProd',$id);
			$this->db->update('mststatusprod',$data);
		}
		function hapus_sts($id){
			$this->db->where('idMstStatusProd',$id);
			$this->db->delete('mststatusprod');
		}
		function get_crud_all_employee() {
			$query=$this->db->query("select * from mstemp");
			return $query->result();
		
		}
		function tambah_employee() {
			$data = array(
				'MstEmp' => $this->input->post('MstEmp'),
				'MstEmpNIK' => $this->input->post('MstEmpNIK'),
				'MstEmpName' => $this->input->post('MstEmpName'),
				'MstEmpDiv' => $this->input->post('MstEmpDiv'),
				'MstEmpEdu' => $this->input->post('MstEmpEdu'),
				'MstEmpReligi' => $this->input->post('MstEmpReligi'),
				'MstEmpBirdthDate' => $this->input->post('MstEmpBirdthDate'),
				'MstEmpJoinDate' => $this->input->post('MstEmpJoinDate'),
				'MstEmpNoRek' => $this->input->post('MstEmpNoRek'),
				'MstEmpNoKtp' => $this->input->post('MstEmpNoKtp'),
				'MstEmpNoNpwp' => $this->input->post('MstEmpNoNpwp'),
				'MstEmpNoJamsos' => $this->input->post('MstEmpNoJamsos'),
				'MstEmpAddress' => $this->input->post('MstEmpAddress'),
				'MstEmpPassword' => $this->input->post('MstEmpPassword'),
				'MstEmpLevel' => $this->input->post('MstEmpLevel')
			);
			return $this->db->insert('mstemp', $data);
		}
		function get_crud_edit_employee($id) {
				$this->db->where('MstEmp',$id);
				$query = $this->db->get('mstemp');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_employee() {
			$id = $this->input->post('MstEmp');
			$data = array (
				'MstEmp' => $this->input->post('MstEmp'),
				'MstEmpNIK' => $this->input->post('MstEmpNIK'),
				'MstEmpName' => $this->input->post('MstEmpName'),
				'MstEmpDiv' => $this->input->post('MstEmpDiv'),
				'MstEmpEdu' => $this->input->post('MstEmpEdu'),
				'MstEmpReligi' => $this->input->post('MstEmpReligi'),
				'MstEmpBirdthDate' => $this->input->post('MstEmpBirdthDate'),
				'MstEmpJoinDate' => $this->input->post('MstEmpJoinDate'),
				'MstEmpNoRek' => $this->input->post('MstEmpNoRek'),
				'MstEmpNoKtp' => $this->input->post('MstEmpNoKtp'),
				'MstEmpNoNpwp' => $this->input->post('MstEmpNoNpwp'),
				'MstEmpJamsos' => $this->input->post('MstEmpJamsos'),
				'MstEmpAddress' => $this->input->post('MstEmpAddress'),
				'MstEmpPassword' => $this->input->post('MstEmpPassword'),
				'MstEmpLevel' => $this->input->post('MstEmpLevel')
			);
			$this->db->where('MstEmp',$id);
			$this->db->update('mstemp',$data);
		}
		function hapus_employee($id){
			$this->db->where('MstEmp',$id);
			$this->db->delete('mstemp');
		}
	}
?>
