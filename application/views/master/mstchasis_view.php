<div class="col-lg-10">
	<body>
<div class="container-fluid">
		<h1><?php echo $judul; ?></h1>
		
			<form method="POST" action="<?php echo site_url('mstchasis/proses_tambah_chasis'); ?>">
			<legend>
<!--Button Add New Approval-->
			<h3 ><button type="button" class="btn btn-default btn-lg">Add New Approval &nbsp;<span class="glyphicon glyphicon-plus"></span></button></br></br>
	
	
	  <table  class="table table-bordered " >
	    <tr>
	      <td width="166"><input type="hidden" name="MstChasID" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>No Chasis</td>
	      <td width="166"><input type="text" name="MstChasNo" class="form-control" value="<?php echo $new_id; ?>" readonly/></td>
        </tr>
        <tr>
	      <td>Mobil</td>
	      <td width="166"><input type="text" name="MStChasMaker" placeholder="MStChasMaker" class="form-control" /></div></td>
        </tr>
	    <tr>
	      <td>Approval 2</td>
	      <td><input type="text" name="MStChasModel" placeholder="MStChasModel" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>Approval 3</td>
	      <td><input type="text" name="MStChasType" placeholder="MStChasType" class="form-control"/></td>
       
	      <!--<td>&nbsp;</td>-->
		  <tr>
	      <td colspan="2" ><input type="submit" name="simapn" value="Simpan" class="btn btn-primary btn-lg  ">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg  "></td>
        </tr>
    </table>	
    </form>
		
		<hr>
		
		<table  class="table table-bordered table-hover">
			<tr>
				<th id="judul">No</th>
				<th id="judul">MStChasMaker</th>
				<th id="judul">MStChasModel</th>
				<th id="judul">MStChasType</th>
				<th id="judul" colspan="2">Action</th>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstChasNo; ?></td>
				<td class="hd"><?php echo $a->MStChasMaker; ?></td>
				<td class="hd"><?php echo $a->MStChasModel; ?></td>
				<td class="hd"><?php echo $a->MStChasType; ?></td>
				<td class="hd"><a class="btn btn-default " href="<?php echo site_url ('mstchasis/edit/'.$a->MstChasID)?>  ">Edit</a></td><td class="hd">
				<a class="btn btn-default  " href="<?php echo site_url ('mstchasis/hapus/'.$a->MstChasID)?>  ">Delete</a></td>
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
