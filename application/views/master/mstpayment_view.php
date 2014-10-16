<div class="col-lg-10">
	<body>
<div class="container-fluid">
		<h1><?php echo $judul; ?></h1>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstpayment/proses_tambah_pay'); ?>">
<!--Button Add New Approval-->
			<h3 ><button type="button" class="btn btn-default btn-lg">Add New Approval &nbsp;<span class="glyphicon glyphicon-plus"></span></button></br></br>
		
			
	  <table class="table table-bordered">
	    <tr>
	      <td><input type="hidden" name="idMstpayment" class="form-control"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstPaySyarat" placeholder="MstPaySyarat" class="form-control" /></td>
        </tr>
	     <!-- <td>&nbsp;</td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg ">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg "></td>
        </tr>
    </table>	
    </form>
		<!--</fieldset>-->
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" style="font-weight:bold;font-size:13px;" class="table table-bordered table-hover">
			<tr>
				<th id="judul">No</td>
				<th id="judul">MstGRPSalesDesc</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstPayID; ?></td>
				<td class="hd"><?php echo $a->MstPaySyarat; ?></td>
				<td class="hd"><a class="btn btn-default" href="<?php echo site_url ('mstpayment/edit/'.$a->MstPayID)?>">Edit</a></td>
				<td><a class="btn btn-default"href="<?php echo site_url ('mstpayment/hapus/'.$a->MstPayID)?>">Delete</a></td>
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
