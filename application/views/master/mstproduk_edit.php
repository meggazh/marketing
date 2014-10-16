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
			<form method="POST" action="<?php echo site_url('mstproduk/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="idMstProduct" value="<?php echo $a->idMstProduct; ?>"/>
					<input type="text" name="MstProductType" value="<?php echo $a->MstProductType; ?>"/>
					<input type="text" name="MstProductGroupingSize" value="<?php echo $a->MstProductGroupingSize; ?>"/>
					<input type="text" name="MstProductSize" value="<?php echo $a->MstProductSize; ?>"/>
					<input type="text" name="MstProductVariant" value="<?php echo $a->MstProductVariant; ?>"/>
					<input type="text" name="MstProductProductCode" value="<?php echo $a->MstProductProductCode; ?>"/>
					<input type="text" name="MstProductDescription" value="<?php echo $a->MstProductDescription; ?>"/>
					<input type="text" name="MstProductInnerSizeL" value="<?php echo $a->MstProductInnerSizeL; ?>"/>
					<input type="text" name="MstProductInnerSizeW" value="<?php echo $a->MstProductInnerSizeW; ?>"/>
					<input type="text" name="MstProductInnerSizeH" value="<?php echo $a->MstProductInnerSizeH; ?>"/>
					<input type="text" name="MstProductOuterSizeL" value="<?php echo $a->MstProductOuterSizeL; ?>"/>
					<input type="text" name="MstProductOuterSizeW" value="<?php echo $a->MstProductOuterSizeW; ?>"/>
					<input type="text" name="MstProductOuterSizeH" value="<?php echo $a->MstProductOuterSizeH; ?>"/>
					<input type="text" name="idMstPrice" value="<?php echo $a->idMstPrice; ?>"/>
					<input type="text" name="idMstSpec" value="<?php echo $a->idMstSpec; ?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
	