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
	<!--css-->
	<style>
			<!--h3.updateappr {
							margin:0px 0px 0px 0px;
							background:orange;
							
							border-radius:6px ;
							box-shadow:2 0 3px 2px grey;
							width:300px;
							height:50px;	
						  }
						  -->
	</style>
	</head>
	<body>
	<!--Container-->
	<div class="container-fluid">
		<h1><?php echo"$judul";?></h1>
		<hr>
		<!--<fieldset>-->
			<legend><h3>Update Employee</h3></legend>
			<form method="POST" action="<?php echo site_url('mstemployee/proses_edit'); ?>">
				<table class="table  table-bordered ">
					<tr>
							<td>MstEmpID</td>
							<td><?php foreach($daftar->result() as $a):?>
								<input type="hidden" name="MstEmp" value="<?php echo $a->MstEmp; ?>" class="form-control"/></td></tr>
					<tr>	
							<td>MstEmpNIK</td>
							<td><input type="text" name="MstEmpNIK" value="<?php echo $a->MstEmpNIK; ?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpName</td>
							<td><input type="text" name="MstEmpName" value="<?php echo $a->MstEmpName; ?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpDivision</td>
							<td><input type="text" name="MstEmpDivision" value="<?php echo $a->MstEmpDivision;?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpEdu</td>
							<td><input type="text" name="MstEmpEdu" value="<?php echo $a->MstEmpEdu;?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpReligi</td>
							<td><input type="text" name="MstEmpReligi" value="<?php echo $a->MstEmpReligi;?>" class="form-control"/></td></tr>
							
							
					<tr>
							<td>MstEmpBirdthDate</td>
							<td>
								<input type="text" name="MstEmpBirdthDate" value="<?php echo $a->MstEmpBirdthDate; ?>" class="form-control"/></td></tr>
					<tr>	
							<td>MstEmpJoinDate</td>
							<td><input type="text" name="MstEmpJoinDate" value="<?php echo $a->MstEmpJoinDate; ?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpNoRek</td>
							<td><input type="text" name="MstEmpNoRek" value="<?php echo $a->MstEmpNoRek; ?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpNoKtp</td>
							<td><input type="text" name="MstEmpNoKtp" value="<?php echo $a->MstEmpNoKtp;?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpNoNpwp</td>
							<td><input type="text" name="MstEmpNoNpwp" value="<?php echo $a->MstEmpNoNpwp;?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpNoJamsos</td>
							<td><input type="text" name="MstEmpNoJamsos" value="<?php echo $a->MstEmpNoJamsos;?>" class="form-control"/></td></tr>
							
							
					<tr>
							<td>MstEmpAddress</td>
							<td><input type="text" name="MstEmpAddress" value="<?php echo $a->MstEmpAddress;?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpPassword</td>
							<td><input type="text" name="MstEmpPassword" value="<?php echo $a->MstEmpPassword;?>" class="form-control"/></td></tr>
					<tr>
							<td>MstEmpLevel</td>
							<td><input type="text" name="MstEmpLevel" value="<?php echo $a->MstEmpLevel;?>" class="form-control"/></td></tr>	
					
					<tr>
							<?php endforeach; ?>
							<td colspan="2"><button type="submit" name="simpan" class="btn btn-primary btn-lg">
  <span class="glyphicon glyphicon-save"></span> Update
</button></td></tr>
					<tr>
							<td ></td>
							<td><a href="<?php echo site_url ('mstemployee');?>"><h3>[ Back &nbsp;<span class="glyphicon glyphicon-home"></span>] </a></td></tr>
				</table>
							
			</form>
		<!--</fieldset>-->
	</div>
		<hr>
		
	</body>
</html>
