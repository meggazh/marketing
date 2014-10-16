<?php
	class M_crud extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		function get_crud_all() {
			$query=$this->db->query("select * from barang order by kode_barang asc");
			return $query->result();
		}

		function tambah() {
			$data = array(
				'kode_barang' => $this->input->post('kode_barang'),
				'chasis' => $this->input->post('chasis'),
				'type' => $this->input->post('type'),
				'spec' => $this->input->post('spec'),
				'nama_barang' => $this->input->post('nama_barang'),
				'qty' => $this->input->post('qty'),
				'harga' => $this->input->post('harga')
			);
			return $this->db->insert('barang', $data);
		}

		function get_crud_edit($id) {
				$this->db->where('idbarang',$id);
				$query = $this->db->get('barang');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}

		function edit() {
			$id = $this->input->post('idbarang');
			$data = array (
			'kode_barang' => $this->input->post('kode_barang'),
				'chasis' => $this->input->post('chasis'),
				'type' => $this->input->post('type'),
				'spec' => $this->input->post('spec'),
				'nama_barang' => $this->input->post('nama_barang'),
				'qty' => $this->input->post('qty'),
				'harga' => $this->input->post('harga')
			);
			$this->db->where('idbarang',$id);
			$this->db->update('barang',$data);
		}
		function hapus_d($id){
			$this->db->where('idbarang',$id);
			$this->db->delete('barang');
		}
		function tampilappr() {
			$query=$this->db->querry("selet * form mstappr ");
			return $query->result();
		}
		function tambah_appr() {
			$data=array (
				'MstAppr1' =>$this->input->post('MstAppr1'),
				'MstAppr2' =>$this->input->post('MstAppr2'),
				'MstAppr3' =>$this->input->post('MstAppr3'),
				'MstAppr4' =>$this->input->post('MstAppr4')
				);
			return $this->db->insert('mstappr');		
				
		} 
		function edit_apprs($id) {
				$this->db->where('iMstAppr',$id);
				$query = $this->db->get('mstappr');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_appr() {
			$this->input->post->('idMstAppr');
			$data=array (
			'idMstUser'=>$this->input->post('idMstUser')
				'MstAppr1' =>$this->input->post('MstAppr1'),
				'MstAppr2' =>$this->input->post('MstAppr2'),
				'MstAppr3' =>$this->input->post('MstAppr3'),
				'MstAppr4' =>$this->input->post('MstAppr4')
		);
		$this->db->where->('idMstAppr',$id);
		$this->db->update->('mstappr',$data);
		}		 
		function delete_appr ($id) {
		$this->db->where('idMstAppr',$id);
		$this->db->delete('mstappr',$data);
		}
		function tampilchasis() {
			$query=$this->db->querry("selet * form mstchas ");
			return $query->result();
		}
		function tambah_chasis() {
			$data = array(
				'MStChasMaker' => $this->input->post('MStChasMaker'),
				'MStChasModel' => $this->input->post('MStChasModel'),
				'MStChasType' => $this->input->post('MStChasType')
				
			);
			return $this->db->insert('idMstChasis', $data);
		}
		function edit_chasiss($id) {
				$this->db->where('idMstChas',$id);
				$query = $this->db->get('mstchas');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_chasis() {
			$this->input->post->('idMstChasis');
			$data=array (
				'MStChasMaker' => $this->input->post('MStChasMaker'),
				'MStChasModel' => $this->input->post('MStChasModel'),
				'MStChasType' => $this->input->post('MStChasType')
				
			);
		$this->db->where->('idMstChasis',$id);
		$this->db->update->('mstchas',$data);
		}
		function hapus_chasis($id){
			$this->db->where('idMstChasis',$id);
			$this->db->delete('mstchas');
		}
		
		function tampil_cry () {
			$query=$this->db->query('select * form mstcry');
			return $query->result();
		}
		function tambah_cry() {
			$data = array(
				'MstCrsName' => $this->input->post('MstCrsName'),
				'MstCrsSym' => $this->input->post('MstCrsSym')
				
			);
			return $this->db->insert('idMstCrs', $data);
			
		}
		function edit_crys($id) {
				$this->db->where('idMstCrs',$id);
				$query = $this->db->get('mstcrs');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_cry() {
			$this->input->post->('idMstCrs');
			$data=array (
				'MstCrsName' => $this->input->post('MstCrsName'),
				'MstCrsSym' => $this->input->post('MstCrsSym')
			);
		$this->db->where->('idMstCrs',$id);
		$this->db->update->('mstcrs',$data);
		}
		function hapus_cry($id){
			$this->db->where('idMstCrs',$id);
			$this->db->delete('mstcrs');
		
		}
		function tampil_customer () {
			$query=$this->db->query('select * form  mstcust');
			return $query->result();
		}
		function tambah_customer() {
			$data = array(
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
				'idMstPayment' => $this->input->post('idMstPayment')
				
			);
			return $this->db->insert('idMstCust', $data);
		}
		function edit_customers($id) {
				$this->db->where('idMstCust',$id);
				$query = $this->db->get('mstcust');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_customer() {
			$this->input->post->('iMstCust');
			$data=array (
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
				'idMstPayment' => $this->input->post('idMstPayment')
			);
		$this->db->where->('idMstCust',$id);
		$this->db->update->('mstcust',$data);
		}
		function hapus_customer($id){
			$this->db->where('idMstCust',$id);
			$this->db->delete('mstcust');
		}
		function tampil_grpsales () {
			$query=$this->db->query('select * form mstgrpsales');
			return $query->result();
		}
		function tambah_grpsales() {
			$data = array(
				'MstGRPSalesDesc' => $this->input->post('MstGRPSalesDesc')
				
			);
			return $this->db->insert('idMstGrpSales', $data);
		}
		function edit_grpsaless($id) {
				$this->db->where('idMstGrpSales',$id);
				$query = $this->db->get('mstgrpsales');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_grpsales() {
			$this->input->post->('idMstGrpSales');
			$data=array (
				'MstGRPSalesDesc' => $this->input->post('MstGRPSalesDesc')
			);
		$this->db->where->('idMstGrpSales',$id);
		$this->db->update->('mstgrpsales',$data);
		}
		function hapus_grpsales($id){
			$this->db->where('idMstGrpSales',$id);
			$this->db->delete('mstgrpsales');
		}
		function tampil_payment () {
			$query=$this->db->query('select * form mstpayment');
			return $query->result();
		}
		function tambah_payment() {
			$data = array(
				'MstPaySyrByr' => $this->input->post('MstPaySyrByr')
				
			);
			return $this->db->insert('idMstpayment', $data);
		}
		function edit_payments($id) {
				$this->db->where('idMstpayment',$id);
				$query = $this->db->get('mstpayment');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_payment() {
			$this->input->post->('idMstpayment');
			$data=array (
				'MstPaySyrByr' => $this->input->post('MstPaySyrByr')
			);
			$this->db->where->('idMstpayment',$id);
			$this->db->update->('mstpayment',$data);
		}
		function hapus_payment($id){
			$this->db->where('idMstpayment',$id);
			$this->db->delete('mstpayment');
		}
		function tampil_mstprice () {
			$query=$this->db->query('select * form mstprice');
			return $query->result();
		}
		function tambah_mstprice() {
			$data = array(
				'MstPriceUnitPrice' => $this->input->post('MstPriceUnitPrice'),
				'MstPriceExpiredDate' => $this->input->post('MstPriceExpiredDate'),
				'MstPriceStatus' => $this->input->post('MstPriceStatus')
			);
			return $this->db->insert('idMstPrice', $data);
		}
		function edit_mstprices($id) {
				$this->db->where('idMstPrice',$id);
				$query = $this->db->get('mstprice');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_mstprice() {
			$this->input->post->('idMstPrice');
			$data=array (
				'MstPriceUnitPrice' => $this->input->post('MstPriceUnitPrice'),
				'MstPriceExpiredDate' => $this->input->post('MstPriceExpiredDate'),
				'MstPriceStatus' => $this->input->post('MstPriceStatus')
			);
			$this->db->where->('idMstPrice',$id);
			$this->db->update->('mstprice',$data);
		}
		function hapus_mstprice($id){
			$this->db->where('idMstPrice',$id);
			$this->db->delete('mstprice');
		}
		function tampil_produk () {
			$query=$this->db->query('select * form mstproduct');
			return $query->result();
		}
		function tambah_produk() {
			$data = array(
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
				'idMstPrice' => $this->input->post('idMstPrice'),
				'idMstSpec' => $this->input->post('idMstSpec')
			);
			return $this->db->insert('idMstProduct', $data);
		}
		function edit_produks($id) {
				$this->db->where('idMstProduct',$id);
				$query = $this->db->get('mstproduct');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_produk() {
			$this->input->post->('idMstPrice');
			$data=array (
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
				'idMstPrice' => $this->input->post('idMstPrice'),
				'idMstSpec' => $this->input->post('idMstSpec')
			);
			$this->db->where->('idMstProduct',$id);
			$this->db->update->('mstproduct',$data);
		}
		function hapus_produk($id){
			$this->db->where('idMstProduct',$id);
			$this->db->delete('mstproduct');
		}
		function tampil_sales () {
			$query=$this->db->query('select * form mstsalespic');
			return $query->result();
		}
		function tambah_sales() {
			$data = array(
				'MstSalesPICName' => $this->input->post('MstSalesPICName'),
				'MstSalesPICPICEmail1' => $this->input->post('MstSalesPICPICEmail1'),
				'MstSalesPICPICEmail2' => $this->input->post('MstSalesPICPICEmail2'),
				'MstSalesPICPICEmail3' => $this->input->post('MstSalesPICPICEmail3')
			);
			return $this->db->insert('idMstSalesPIC', $data);
		}
		function edit_saless($id) {
				$this->db->where('idMstSalesPIC',$id);
				$query = $this->db->get('mstsalespic');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_sales() {
			$this->input->post->('idMstSalesPIC');
			$data = array(
				'MstSalesPICName' => $this->input->post('MstSalesPICName'),
				'MstSalesPICPICEmail1' => $this->input->post('MstSalesPICPICEmail1'),
				'MstSalesPICPICEmail2' => $this->input->post('MstSalesPICPICEmail2'),
				'MstSalesPICPICEmail3' => $this->input->post('MstSalesPICPICEmail3')
			);
			$this->db->where->('idMstSalesPIC',$id);
			$this->db->update->('mstsalespic',$data);
		}
		function hapus_sales($id){
			$this->db->where('idMstSalesPIC',$id);
			$this->db->delete('mstsalespic',$data);
		}
		function tampil_satuan () {
			$query=$this->db->query('select * form mstsatuan');
			return $query->result();
		}
		function tambah_satuan() {
			$data = array(
				'MstSatName' => $this->input->post('MstSatName'),
				'MstSatAbbr' => $this->input->post('MstSatAbbr')
			);
			return $this->db->insert('idMstSatuan', $data);
		}
		function edit_satuans($id) {
				$this->db->where('idMstSatuan',$id);
				$query = $this->db->get('mstsatuan');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_satuan() {
			$this->input->post->('idMstSatuan');
			$data = array(
				'MstSatName' => $this->input->post('MstSatName'),
				'MstSatAbbr' => $this->input->post('MstSatAbbr')
			);
			$this->db->where->('idMstSatuan',$id);
			$this->db->update->('mstsatuan',$data);
		}
		function hapus_satuan($id){
			$this->db->where('idMstSalesPIC',$id);
			$this->db->delete('mstsatuan');
		}
		function tampil_spec () {
			$query=$this->db->query('select * form mstspec');
			return $query->result();
		}
		function tambah_spec() {
			$data = array(
				'MstSpecDesc' => $this->input->post('MstSpecDesc'),
				'MstSpecGaransiTxt' => $this->input->post('MstSpecGaransiTxt'),
				'MstSpecIncludeTxt' => $this->input->post('MstSpecIncludeTxt'),
				'MstSpecExcludeTxt' => $this->input->post('MstSpecExcludeTxt'),
				'MstSpecSpecialSpecTxt' => $this->input->post('MstSpecSpecialSpecTxt')
			);
			return $this->db->insert('idMstSpec', $data);
		}
		function edit_specs($id) {
				$this->db->where('idMstSpec',$id);
				$query = $this->db->get('mstspec');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_spec() {
			$this->input->post->('idMstSpec');
			$data = array(
				'MstSpecDesc' => $this->input->post('MstSpecDesc'),
				'MstSpecGaransiTxt' => $this->input->post('MstSpecGaransiTxt'),
				'MstSpecIncludeTxt' => $this->input->post('MstSpecIncludeTxt'),
				'MstSpecExcludeTxt' => $this->input->post('MstSpecExcludeTxt'),
				'MstSpecSpecialSpecTxt' => $this->input->post('MstSpecSpecialSpecTxt')
			);
			$this->db->where->('idMstSpec',$id);
			$this->db->update->('mstspec',$data);
		}
		function hapus_satuan($id){
			$this->db->where('idMstSpec',$id);
			$this->db->delete('mstspec');
		}
		function tampil_statusprod () {
			$query=$this->db->query('select * form mststatusprod');
			return $query->result();
		}
		function tambah_statusprod() {
			$data = array(
				'MstStatusProdGroup' => $this->input->post('MstStatusProdGroup'),
				'MstStatusProdSubGroup' => $this->input->post('MstStatusProdSubGroup'),
				'MstStatusProdJob' => $this->input->post('MstStatusProdJob')
			);
			return $this->db->insert('idMstStatusProd', $data);
		}
		function edit_statusprods($id) {
				$this->db->where('idMstStatusProd',$id);
				$query = $this->db->get('mststatusprod');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_statuspord() {
			$this->input->post->('idMstStatusProd');
			$data = array(
				'MstStatusProdGroup' => $this->input->post('MstStatusProdGroup'),
				'MstStatusProdSubGroup' => $this->input->post('MstStatusProdSubGroup'),
				'MstStatusProdJob' => $this->input->post('MstStatusProdJob')
			);
			$this->db->where->('idMstStatusProd',$id);
			$this->db->update->('mststatusprod',$data);
		}
		function hapus_statusprod($id){
			$this->db->where('idMstStatusProd',$id);
			$this->db->delete('mststatusprod',$data);
		}
		function tampil_user () {
			$query=$this->db->query('select * form mstuser');
			return $query->result();
		}
		function tambah_user() {
			$data = array(
				'MstUserName' => $this->input->post('MstUserName'),
				'MstUserPwd' => $this->input->post('MstUserPwd'),
				'MstUserLevel' => $this->input->post('MstUserLevel'),
				'Remaks' => $this->input->post('Remaks')
			);
			return $this->db->insert('idMstUser', $data);
		}
		function edit_users($id) {
				$this->db->where('idMstUser',$id);
				$query = $this->db->get('mstuser');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_users() {
			$this->input->post->('idMstUser');
			$data = array(
				'MstUserName' => $this->input->post('MstUserName'),
				'MstUserPwd' => $this->input->post('MstUserPwd'),
				'MstUserLevel' => $this->input->post('MstUserLevel'),
				'Remaks' => $this->input->post('Remaks')
			);
			$this->db->where->('idMstUser',$id);
			$this->db->update->('mstuser',$data);
		}
		function hapus_satuan($id){
			$this->db->where('idMstUser',$id);
			$this->db->delete('mstuser');
		}
	}
?>
