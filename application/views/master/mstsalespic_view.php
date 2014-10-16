<div class="col-lg-10">
	<body>
		<h1><?php echo $judul; ?></h1>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstsalespic/proses_tambah_salespic'); ?>">
			<legend>
			<div class="container-fluid">
			<h3 ><button class="btn btn-default btn-lg" >Add New Appropval</h3></legend></button>
	  <table class="table table table-bordered ">
	    <tr>
	      <td><input type="hidden" name="MstSalesPICID" class="form-control"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSalesPICName" placeholder="MstSalesPICName" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSalesPICPICEmail1" placeholder="MstSalesPICPICEmail1" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSalesPICPICEmail2" placeholder="MstSalesPICPICEmail2	" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSalesPICPICEmail3" placeholder="MstSalesPICPICEmail3" class="form-control"/></td>
        </tr>
	      <!--<td>&nbsp;</td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg"></td>
        </tr>
    </table>	
    </form>
		<!--</fieldset>-->
		<hr>
		<table cellpadding="5" cellspacing="5"  class="table table-bordered table-hover top-block">
			<tr>
				<th id="judul">No</th>
				<th id="judul">MstSalesPICName</th>
				<th id="judul">MstSalesPICPICEmail1</th>
				<th id="judul">MstSalesPICPICEmail2</th>
				<th id="judul">MstSalesPICPICEmail3</th>
				<th id="judul" colspan="2">Action</th>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstSalesPICID; ?></td>
				<td class="hd"><?php echo $a->MstSalesPICName; ?></td>
				<td class="hd"><?php echo $a->MstSalesPICPICEmail1; ?></td>
				<td class="hd"><?php echo $a->MstSalesPICPICEmail2; ?></td>
				<td class="hd"><?php echo $a->MstSalesPICPICEmail3; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mstsalespic/edit/'.$a->MstSalesPICID)?>"><input type="submit" value="Edit" class="btn btn-default btn-lg"></a></td><td class="hd">
				<a href="<?php echo site_url ('mstsalespic/hapus/'.$a->MstSalesPICID)?>"><input type="submit" value="Delete" class="btn btn-default btn-lg"></a></td>
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
