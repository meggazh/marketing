<div class="col-lg-10">
	<body>
	
<div class="container-fluid">
		<h1><?php echo $judul; ?></h1>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstgrpsales/proses_tambah_grpsales'); ?>">
			<legend>
<!--Button Add New Approval-->
			<h3 ><button type="button" class="btn btn-default btn-lg">Add New Approval &nbsp;<span class="glyphicon glyphicon-plus"></span></button></br></br>
			
	  <table class="table table table-bordered ">
	    <tr>
	      <td><input type="hidden" name="MstGRPSalesID" class="form-control"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstGRPSalesDesc" placeholder="MstGRPSalesDesc" class="form-control"/></td>
        </tr>
	     <!-- <td>&nbsp;</td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse"></td>
        </tr>
    </table>	
    </form>
		<!--</fieldset>-->
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" style="font-weight:bold;font-size:13px;" class="table  table-bordered  table-hover">
			<tr>
				<th id="judul">No</td>
				<th id="judul">MstGRPSalesDesc</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstGRPSalesID; ?></td>
				<td class="hd"><?php echo $a->MstGRPSalesDesc; ?></td>
				<td class="hd"><a class="btn btn-default"  href="<?php echo site_url ('mstgrpsales/edit/'.$a->MstGRPSalesID)?>">Edit</a></td><td class="hd">
			<a class="btn btn-default" href="<?php echo site_url ('mstgrpsales/hapus/'.$a->MstGRPSalesID)?>">Delete</a></td>
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
