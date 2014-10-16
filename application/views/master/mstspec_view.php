<div class="col-lg-10">
	<body>
<div class="container-fluid">
		<h1><?php echo $judul; ?></h1>
		<fieldset>
			<form method="POST" action="<?php echo site_url('mstspec/proses_tambah_spec'); ?>">
			<legend>
			<h3>Add New Appropval</h3></legend>
	  <table>
	    <tr>
	      <td><input type="hidden" name="idMstSpec"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSpecDesc" placeholder="MstSpecDesc"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSpecGaransiTxt" placeholder="MstSpecGaransiTxt"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSpecIncludeTxt" placeholder="MstSpecIncludeTxt"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSpecExcludeTxt" placeholder="MstSpecExcludeTxt"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstSpecSpecialSpecTxt" placeholder="MstSpecSpecialSpecTxt"/></td>
        </tr>
	      <td>&nbsp;</td>
	      <td><input type="submit" name="simapn" value="Simpan" class="submitButton"></td>
        </tr>
    </table>	
    </form>
		</fieldset>
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" class="table top-block">
			<tr>
				<th id="judul">No</td>
				<th id="judul">MstSpecDesc</td>
				<th id="judul">MstSpecGaransiTxt</td>
				<th id="judul">MstSpecIncludeTxt</td>
				<th id="judul">MstSpecExcludeTxt</td>
				<th id="judul">MstSpecSpecialSpecTxt</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->idMstSpec; ?></td>
				<td class="hd"><?php echo $a->MstSpecDesc; ?></td>
				<td class="hd"><?php echo $a->MstSpecGaransiTxt; ?></td>
				<td class="hd"><?php echo $a->MstSpecIncludeTxt; ?></td>
				<td class="hd"><?php echo $a->MstSpecExcludeTxt; ?></td>
				<td class="hd"><?php echo $a->MstSpecSpecialSpecTxt; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mstspec/edit/'.$a->idMstSpec)?>"><input type="submit" value="Edit" class="submitButton"></a></td><td class="hd">
				<a href="<?php echo site_url ('mstspec/hapus/'.$a->idMstSpec)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
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
