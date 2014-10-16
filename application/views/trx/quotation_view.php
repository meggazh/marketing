<div class="col-lg-10">
	<body>
	
		<fieldset>
			<form method="POST" action="<?php echo site_url('qutation/tambah'); ?>">
			<legend>
			<h3>Add New Appropval</h3></legend>
	  <table>
	    <tr>
	      <td><input type="hidden" name="TxnQuotHdrID"/></td>
        </tr>
        <tr>
	      <td>No Quotation</td>
	      <td><input type="text" name="TxnQuotHdrNo" placeholder="TxnQuotHdrNo"/></td>
        </tr>
		<tr>
	      <td>TxnQuotHdrNoRev 1</td>
	      <td><input type="text" name="TxnQuotHdrNoRev" placeholder="TxnQuotHdrNoRev"/></td>
        </tr>
		<tr>
	      <td>TxnQuotHdrDate 1</td>
	      <td ><input type="text" name="TxnQuotHdrDate" placeholder="TxnQuotHdrDate"/></td>
        </tr>
		<tr>
	      <td>TxnQuotHdrRE 1</td>
	      <td ><input type="text" name="TxnQuotHdrRE" placeholder="TxnQuotHdrRE"/></td>
        </tr>
		<tr>
	      <td>TxnQuotHdrTermsTxt 1</td>
	      <td ><input type="text" name="TxnQuotHdrTermsTxt" placeholder="TxnQuotHdrTermsTxt"/></td>
        </tr><tr>
	      <td>TxnQuotHdrDiscount 1</td>
	      <td ><input type="text" name="TxnQuotHdrDiscount" placeholder="TxnQuotHdrDiscount"/></td>
        </tr>
		<tr>
	      <td>TxnQuotHdrRemarks</td>
	      <td ><input type="text" name="TxnQuotHdrRemarks" placeholder="TxnQuotHdrRemarks"/></td>
        </tr>
		<tr>
	      <td>TxnDrawHdrID 1</td>
	      <td ><input type="text" name="TxnDrawHdrID" placeholder="TxnDrawHdrID"/></td>
        </tr>
		<tr>
	      <td>Customer</td>
	      <td><select class="form-control" name="MstCustID">
		<option value="" selected>--select Customer--</option>
		<?php 
			if(empty($cs)){
		echo '<option value=""></option>';
			}else{
         foreach($cs as $row){
             echo '<option value="'.$row->MstCustID.'">'.$row->MstCustIDName.'</option>';
         }
			} ?>
       </select>
	   </td>
        </tr>
		<tr>
	      <td>Seles PIC</td>
	      <td><select class="form-control" name="MstSalesPICID">
		<option value="" selected>--select sales PIC--</option>
		<?php 
			if(empty($salespic)){
		echo '<option value=""></option>';
			}else{
         foreach($salespic as $row){
             echo '<option value="'.$row->MstSalesPICID.'">'.$row->MstSalesPICName.'</option>';
         }
			} ?>
       </select>
	   </td>
        </tr>
		<tr>
	      <td>MstApprID 1</td>
	      <td ><input type="text" name="MstApprID" placeholder="MstApprID"/></td>
        </tr>
		<tr>
	      <td>MstApprID 1</td>
	      <td ><input type="text" name="MstEmp" placeholder="MstEmp"/></td>
        </tr>
	      <td>&nbsp;</td>
	      <td >&nbsp;</td>
        </tr>
    </table>
	  <table width="1865" border="1">
	    <tr>
	      <td width="164">TxnQuotDtlNo</td>
	      <td width="164">TxnQuotHdrNoRev </td>
	      <td width="164">TxnQuotDtlQty 1</td>
	      <td width="164">TxnQuotDtlUnitPrice 1</td>
	      <td width="164">TxnQuotDtlDiscount 1</td>
	      <td width="164">TxnQuotDtlDrawNo 1</td>
	      <td width="164">TxnQuotDtlDrawDate</td>
	      <td width="164">TxnQuotDtlRepair</td>
	      <td width="42">MstChasID 1</td>
	      <td width="8">MstProductID 1</td>
	      <td width="12">MstTypeOrderID</td>
	      <td width="110">MstSatID 1</td>
        </tr>
	    <tr>
	      <td><input type="text" name="TxnQuotDtlNo" placeholder="TxnQuotDtlNo"/></td>
	      <td><input type="text" name="TxnQuotHdrNoRev2" placeholder="TxnQuotHdrNoRev"/></td>
	      <td><input type="text" name="TxnQuotDtlQty" placeholder="TxnQuotDtlQty"/></td>
	      <td><input type="text" name="TxnQuotDtlUnitPrice" placeholder="TxnQuotDtlUnitPrice"/></td>
	      <td><input type="text" name="TxnQuotDtlDiscount" placeholder="TxnQuotDtlDiscount"/></td>
	      <td><input type="text" name="TxnQuotDtlDrawNo" placeholder="TxnQuotDtlDrawNo"/></td>
	      <td><input type="text" name="TxnQuotDtlDrawDate" placeholder="TxnQuotDtlDrawDate"/></td>
	      <td><input type="text" name="TxnQuotDtlRepair" placeholder="TxnQuotDtlRepair	"/></td>
	      <td><select class="form-control" name="MstChasID">
		<option value="" selected>--select Chasis--</option>
		<?php 
			if(empty($chasis)){
		echo '<option value=""></option>';
			}else{
         foreach($chasis as $row){
             echo '<option value="'.$row->MstChasID.'">'.$row->MStChasType.'</option>';
         }
			} ?>
       </select>
	   </td>
	      <td><select class="form-control" name="MstProductID">
		<option value="" selected>--select Product--</option>
		<?php 
			if(empty($produk)){
		echo '<option value=""></option>';
			}else{
         foreach($produk as $row){
             echo '<option value="'.$row->MstProductID.'">'.$row->MstSalesPICName.'</option>';
         }
			} ?>
       </select>
	   </td>
	      <td><select class="form-control" name="MstTypeOrderID">
		<option value="" selected>--select Type Order--</option>
		<?php 
			if(empty($salespic)){
		echo '<option value=""></option>';
			}else{
         foreach($salespic as $row){
             echo '<option value="'.$row->MstSalesPICID.'">'.$row->MstSalesPICName.'</option>';
         }
			} ?>
       </select>
	   </td>
	   <td><select class="form-control" name="MstSatID">
		<option value="" selected>--select Satuan--</option>
		<?php 
			if(empty($satuan)){
		echo '<option value=""></option>';
			}else{
         foreach($satuan as $row){
             echo '<option value="'.$row->MstSatID.'">'.$row->MstSatAbbr.'</option>';
         }
			} ?>
       </select>
	   </td>
        </tr>
		<tr id="tambah">
            <td colspan="12"><input type="button" class="btn-large btn-success"id="tambah" name="baris" value="tambah baris"/></td>
        </tr>
	    <tr>
	      <td colspan="12"><input type="submit" name="simapn" value="Simpan" class="submitButton"></td>
        </tr>
    </table>
	  <p>
	    
	    </p>
	</body>
</html>
<script type="text/javascript">
    $(document).ready(function(e) {
    
        var data='<tr>'
		+'<td>'
		+'<input type="text" name="TxnQuotDtlNo" placeholder="TxnQuotDtlNo"/></td>'
		+'<td>'
		+'<td><input type="text" name="TxnQuotHdrNoRev2" placeholder="TxnQuotHdrNoRev"/></td>'
	    +'<td>'
		+'<input type="text" name="TxnQuotDtlQty" placeholder="TxnQuotDtlQty"/></td>'
	    +'<td>'
		+'<input type="text" name="TxnQuotDtlUnitPrice" placeholder="TxnQuotDtlUnitPrice"/></td>'
	    +'<td>'
		+'<input type="text" name="TxnQuotDtlDiscount" placeholder="TxnQuotDtlDiscount"/></td>'
	    +'<td>'
		+'<input type="text" name="TxnQuotDtlDrawNo" placeholder="TxnQuotDtlDrawNo"/></td>'
	    +'<td>'
		+'<input type="text" name="TxnQuotDtlDrawDate" placeholder="TxnQuotDtlDrawDate"/></td>'
	    +'<td>'
		+'<input type="text" name="TxnQuotDtlRepair" placeholder="TxnQuotDtlRepair	"/></td>'
		
		$("#tambah").click(function(){
            $("#tambah").before(data);
		
        });
    });
</script>