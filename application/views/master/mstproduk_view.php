<div class="col-lg-10">
	<body>
	
		<h1 ><?php echo $judul; ?></h1>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstproduk/proses_tambah_produk'); ?>">
			<legend>
			<h3 class="judul"><button class="btn btn-default btn-lg" >Add New Appropval</h3></legend></button>
			<div class="container-fluid">	<center>
	  <table width="50%" class="table table table-bordered  ">
	    <tr>
	      <td><input type="hidden" name="MstProductID"/></td>
        </tr>
		 <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductType" class="form-control" value="<?php echo $new_id; ?>" readonly/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductType" placeholder="MstProductType" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductGroupingSize" placeholder="MstProductGroupingSize" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductSize" placeholder="MstProductSize" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductVariant" placeholder="MstProductVariant" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductProductCode" placeholder="MstProductProductCode" class="form-control"/></td>
        </tr>
		  <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductDescription" placeholder="MstProductDescription" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductInnerSizeL" placeholder="MstProductInnerSizeL" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductInnerSizeW" placeholder="MstProductInnerSizeW" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductInnerSizeH" placeholder="MstProductInnerSizeH" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductOuterSizeL" placeholder="MstProductOuterSizeL" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductOuterSizeW" placeholder="MstProductOuterSizeW" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstProductOuterSizeH" placeholder="MstProductOuterSizeH" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="idMstSpec" placeholder="idMstSpec" class="form-control"/></td>
        </tr>
	      <!--<td></td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Submit"  class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"  class="btn btn-default btn-lg"></td>
        </tr>
    </table>	
    </form>
		<!--</fieldset>-->
		<hr>
		<table border="0" cellpadding="3" cellspacing="2" width="" style="font-weight:bold;font-size:13px;" class="table table-bordered table-hover">
			<tr>
				<th id="judul">No</th>
				<th id="judul">MstProductType</th>
				<th id="judul">MstProductGroupingSize</th>
				<th id="judul">MstProductSize</th>
				<th id="judul">MstProductVariant</th>
				<th id="judul">MstProductProductCode</th>
				<th id="judul">MstProductDescription</th>
				<th id="judul">MstProductInnerSizeL</th>
				<th id="judul">MstProductInnerSizeW</th>
				<th id="judul">MstProductInnerSizeH</th>
				<th id="judul">MstProductOuterSizeL</th>
				<th id="judul">MstProductOuterSizeW</th>
				<th id="judul">MstProductOuterSizeH</th>
				<th id="judul">MstSpecID</th>
				<th id="judul" colspan="2">Action</th>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstProductID; ?></td>
				<td class="hd"><?php echo $a->MstProductType; ?></td>
				<td class="hd"><?php echo $a->MstProductGroupingSize; ?></td>
				<td class="hd"><?php echo $a->MstProductSize; ?></td>
				<td class="hd"><?php echo $a->MstProductVariant; ?></td>
				<td class="hd"><?php echo $a->MstProductProductCode; ?></td>
				<td class="hd"><?php echo $a->MstProductDescription; ?></td>
				<td class="hd"><?php echo $a->MstProductInnerSizeL; ?></td>
				<td class="hd"><?php echo $a->MstProductInnerSizeW; ?></td>
				<td class="hd"><?php echo $a->MstProductInnerSizeH; ?></td>
				<td class="hd"><?php echo $a->MstProductOuterSizeL; ?></td>
				<td class="hd"><?php echo $a->MstProductOuterSizeW; ?></td>
				<td class="hd"><?php echo $a->MstProductOuterSizeH; ?></td>
				<td class="hd"><?php echo $a->MstSpecID; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mstproduk/edit/'.$a->MstProductID)?>"><input type="submit" value="Edit" class="submitButton"></a></td><td class="hd">
				<a href="<?php echo site_url ('mstproduk/hapus/'.$a->MstProductID)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			
		</p>
		</div>
		</div>
	</body>
</html>
