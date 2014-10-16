<div class="col-lg-10">
	<body>
		<h1><?php echo $judul; ?></h1>
		<fieldset>
			<form method="POST" action="<?php echo site_url('mststatusprod/proses_tambah_sts'); ?>">
			<legend>
			<h3>Add New Appropval</h3></legend>
	  <table>
	    <tr>
	      <td><input type="hidden" name="idMstStatusProd"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstStatusProdGroup" placeholder="MstStatusProdGroup"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstStatusProdSubGroup" placeholder="MstStatusProdSubGroup"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td ><input type="text" name="MstStatusProdJob" placeholder="MstStatusProdJob"/></td>
        </tr>
	      <td>&nbsp;</td>
	      <td ><input type="submit" name="simapn" value="Simpan" class="submitButton"></td>
        </tr>
    </table>	
    </form>
		</fieldset>
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" class="table top-block;">
			<tr>
				<th id="judul">No</td>
				<th id="judul">MstStatusProdGroup</td>
				<th id="judul">MstStatusProdSubGroup</td>
				<th id="judul">MstStatusProdJob</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->idMstStatusProd; ?></td>
				<td class="hd"><?php echo $a->MstStatusProdGroup; ?></td>
				<td class="hd"><?php echo $a->MstStatusProdSubGroup; ?></td>
				<td class="hd"><?php echo $a->MstStatusProdJob; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mststatusprod/edit/'.$a->idMstStatusProd)?>"><input type="submit" value="Edit" class="submitButton"></a></td><td class="hd">
				<a href="<?php echo site_url ('mststatusprod/hapus/'.$a->idMstStatusProd)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			
		</p>
	</body>
</html>
