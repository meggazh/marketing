<div class="col-lg-10">
	<body>
		<h1><?php echo $judul; ?></h1>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstsatuan/proses_tambah_stn'); ?>">
			<legend>
			<div class="container-fluid">
			<h3 ><button class="btn btn-default btn-lg" >Add New Quotation Price</h3></legend></button>
	  <table class="table table table-bordered ">
	    <tr>
	      <td><input type="hidden" name="MstSatID" class="form-control"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSatName" placeholder="MstSatName" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSatAbbr" placeholder="MstSatAbbr" class="form-control"/></td>
        </tr>
	     <!-- <td>&nbsp;</td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg"></td>
        </tr>
    </table>	
    </form>
		<!--</fieldset>-->
		<hr>
		<table cellpadding="5" cellspacing="5"  class="table table-bordered table-hover top-block">
			<tr>
				<th id="judul">No</td>
				<th id="judul">MstSatName</td>
				<th id="judul">MstSatAbbr</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstSatID; ?></td>
				<td class="hd"><?php echo $a->MstSatName; ?></td>
				<td class="hd"><?php echo $a->MstSatAbbr; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mstsatuan/edit/'.$a->MstSatID)?>"><input type="submit" value="Edit" class="btn btn-default btn-lg"></a></td><td class="hd">
				<a href="<?php echo site_url ('mstsatuan/hapus/'.$a->MstSatID)?>"><input type="submit" value="Delete" class="btn btn-default btn-lg"></a></td>
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
