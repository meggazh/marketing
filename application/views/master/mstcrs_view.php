<div class="col-lg-10">
<body>
<div class="container-fluid">
	<h1><?php echo $judul; ?></h1>
	<fieldset>
		<form method="POST" action="<?php echo site_url('mstcrs/proses_tambah_crs'); ?>">
			<legend>
				<h3>Add New Appropval</h3></legend>
				<table width="333">
					<tr>
						<td>Approval 1</td>
						<td width="166"><input type="text" name="MstCrsID"></td>
					</tr>
					<tr>
						<td>Approval 1</td>
						<td width="166"><input type="text" name="MstCrsName" placeholder="MstCrsName"/></td>
					</tr>
					<tr>
						<td>Approval 2</td>
						<td><input type="text" name="MstCrsSym" placeholder="MstCrsSym"/></td>
					</tr>
					<td>&nbsp;</td>
					<td width="166"><input type="submit" name="simapn" value="Simpan" class="submitButton"></td>
				</tr>
			</table>	
		</form>
	</fieldset>
	<hr>
	<table cellpadding="5" cellspacing="5" width="100%" style="font-weight:bold;font-size:13px;" class="table table-bordered table-striped">
			<tr class="info">
				<th id="judul">No</td>
				<th id="judul">MstCrsName</td>
				<th id="judul">MstCrsSym</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstCrsID; ?></td>
				<td class="hd"><?php echo $a->MstCrsName; ?></td>
				<td class="hd"><?php echo $a->MstCrsSym; ?></td>
				<td class="hd"><a <a class="btn btn-default " href="<?php echo site_url ('mstcrs/edit/'.$a->MstCrsID)?>">Edit</a></td><td class="hd">
				<a class="btn btn-default" href="<?php echo site_url ('mstcrs/hapus/'.$a->MstCrsID)?>">Delete</a></td>
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
