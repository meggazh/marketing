<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <link href="<?php echo base_url (); ?>assets/css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assest/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/chosen.css" rel="stylesheet">
	
    <link href="<?php echo base_url (); ?>assets/css/font-awesome.css" rel="stylesheet" />
	 <link href="<?php echo base_url (); ?>assets/css/superfish.css" rel="stylesheet" />
    <link href="<?php echo base_url (); ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url (); ?>assets/css/custom.css" rel="stylesheet" />
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/superfish.js"></script>
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/application.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-tooltip.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?php echo base_url(); ?>assets/colorbox/jquery.colorbox.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/superfish.js"></script>
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Update Approval</h3></legend>
			<form method="POST" action="<?php echo site_url('mstcus/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="MstCustID" value="<?php echo $a->MstCustID; ?>"/>
					<input type="text" name="MstCustIDName" value="<?php echo $a->MstCustIDName; ?>"/>
					<input type="text" name="MstCustIDAbbr" value="<?php echo $a->MstCustIDAbbr; ?>"/>
					<input type="text" name="MstCustIDAddress1" value="<?php echo $a->MstCustIDAddress1; ?>"/>
					<input type="text" name="MstCustIDAddress2" value="<?php echo $a->MstCustIDAddress2; ?>"/>
					<input type="text" name="MstCustIDAddress3" value="<?php echo $a->MstCustIDAddress3; ?>"/>
					<input type="text" name="MstCustIDPIC1" value="<?php echo $a->MstCustIDPIC1; ?>"/>
					<input type="text" name="MstCustIDPIC2" value="<?php echo $a->MstCustIDPIC2; ?>"/>
					<input type="text" name="MstCustIDPIC3" value="<?php echo $a->MstCustIDPIC3; ?>"/>
					<input type="text" name="MstCustIDNoTlp" value="<?php echo $a->MstCustIDNoTlp; ?>"/>
					<input type="text" name="MstCustIDNofax" value="<?php echo $a->MstCustIDNofax; ?>"/>
					<input type="text" name="MstCustIDPICEmail1" value="<?php echo $a->MstCustIDPICEmail1; ?>"/>
					<input type="text" name="MstCustIDPICEmail2" value="<?php echo $a->MstCustIDPICEmail2; ?>"/>
					<input type="text" name="MstPayID" value="<?php echo $a->MstPayID; ?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
