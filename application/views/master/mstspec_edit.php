<html>
	<head>
	<title><?php echo"$judul"; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Update Approval</h3></legend>
			<form method="POST" action="<?php echo site_url('mstspec/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="idMstSpec" value="<?php echo $a->idMstSpec; ?>"/>
					<input type="text" name="MstSpecDesc" value="<?php echo $a->MstSpecDesc; ?>"/>
					<input type="text" name="MstSpecGaransiTxt" value="<?php echo $a->MstSpecGaransiTxt; ?>"/>
					<input type="text" name="MstSpecIncludeTxt" value="<?php echo $a->MstSpecIncludeTxt; ?>"/>
					<input type="text" name="MstSpecExcludeTxt" value="<?php echo $a->MstSpecExcludeTxt; ?>"/>
					<input type="text" name="MstSpecSpecialSpecTxt" value="<?php echo $a->MstSpecSpecialSpecTxt; ?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
	