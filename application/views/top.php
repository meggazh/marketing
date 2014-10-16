<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sistem Informasi Marketing">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href="<?php echo base_url(); ?>assets/css/chosen.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/uniform.default.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/colorbox.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/jquery.cleditor.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/jquery.noty.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/noty_theme_default.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/elfinder.min.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/elfinder.theme.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/opa-icons.css' rel='stylesheet'>
	<link href="<?php echo base_url(); ?>assets/css/uploadify.css' rel='stylesheet'>
	<link rel="shortcut icon" href="assets/img/favicon.ico">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>	
        <script src="<?php echo base_url(); ?>assets/jstype="text/javascript" src="js/jquery-1.3.2.js"></script>
        <script src="<?php echo base_url(); ?>assets/jstype="text/javascript" src="js/ui.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/jstype="text/javascript" src="js/ui.datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    
</head>
<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
	dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
	  
    </script>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Fahmi Logo" src="img/logo20.png" /> <span>e-CRM</span></a>
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Transaksi</li>
                                                <li><a class="ajax-link" href="contoh.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                                                <li><a class="ajax-link" href="barang.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Barang</span></a></li>
                                                <li><a class="ajax-link" href="customer.php"><i class="icon-th"></i><span class="hidden-tablet"> Customer</span></a></li>
                                                <li><a class="ajax-link" href="progres.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Progres</span></a></li>
                                                <li><a class="ajax-link" href="penawaran.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> Penawaran</span></a></li>
                                                <li><a class="ajax-link" href="info_order.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> Info Order</span></a></li>
                                                <li><a class="ajax-link" href="sales.php"><i class="icon-user"></i><span class="hidden-tablet"> Sales</span></a></li>
                                                <li><a class="ajax-link" href="jadwal.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Jadwal</span></a></li>
						<li class="nav-header hidden-tablet">Center Report</li>
                                                <li><a class="ajax-link" href="penawaran_list.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> List Penawaran</span></a></li>
                                                <li><a class="ajax-link" href="info_order_list.php"><i class="icon-calendar"></i><span class="hidden-tablet"> List info order</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
                                                <li><a href="logout.php"><i class="icon-lock"></i><span class="hidden-tablet"> Logout</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">