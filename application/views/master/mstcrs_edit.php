<div class="col-lg-10">
	<body>
	<div class="container-fluid">
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Update Approval</h3></legend>
			<form method="POST" action="<?php echo site_url('mstcrs/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="	MstCrsID" value="<?php echo $a->	MstCrsID; ?>"/>
					<input type="text" name="MstCrsName" value="<?php echo $a->MstCrsName; ?>"/>
					<input type="text" name="MstCrsSym" value="<?php echo $a->MstCrsSym; ?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		</div>
		</div>
	</body>
</html>
