<div class="col-lg-10">
	
	
	<div class="container-fluid">
		<h1><?php echo $judul; ?></h1>
		
			<form method="POST" action="<?php echo site_url('mstemployee/proses_tambah_employee'); ?>">
			<legend>
<!--Button Add New Approval-->
			<h3 ><button type="button" class="btn btn-default btn-lg">Add New Emloyee &nbsp;<span class="glyphicon glyphicon-plus"></span></button></br></br>
			
	  <table class="table  table-bordered ">
	    <tr>
		
	  <input type="hidden" name="MstEmpID" placeholder="MstEmpID" class="form-control"/>
        </tr>
        <tr>
	      <td>MstEmpNIK</td>
	      <td><input type="text" name="MstEmpNIK" placeholder="MstEmpNIK" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>MstEmpName</td>
	      <td><input type="text" name="MstEmpName" placeholder="MstEmpName" class="form-control"/></td>
        </tr>
	    <tr>
	      <td >MstEmpDivision</td>
	      <td><input type="text" name="MstEmpDiv" placeholder="MstEmpDiv" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>MstEmpEdu</td>
	      <td><input type="text" name="MstEmpEdu" placeholder="MstEmpEdu" class="form-control"/></td>
        </tr>
		
		
		<tr>
		<td>MstEmpReligi</td>
	      <td><input type="text" name="MstEmpReligi" placeholder="MstEmpReligi" class="form-control"/></td>
        </tr>
        <tr>
	      <td>MstEmpBirdthDate</td>
	      <td><input type="text" name="MstEmpBirdthDate" placeholder="MstEmpBirdthDate" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>MstEmpJoinDate</td>
	      <td><input type="text" name="MstEmpJoinDate" placeholder="MstEmpJoinDate" class="form-control"/></td>
        </tr>
	    <tr>
	      <td >MstEmpNoRek</td>
	      <td><input type="text" name="MstEmpNoRek" placeholder="MstEmpNoRek" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>MstEmpNoKtp</td>
	      <td><input type="text" name="MstEmpNoKtp" placeholder="MstEmpNoKtp" class="form-control"/></td>
        </tr>
		
		<tr>
		<td>MstEmpNoNpwp</td>
	      <td><input type="text" name="MstEmpNoNpwp" placeholder="MstEmpNoNpwp"class="form-control"/></td>
        </tr>
        <tr>
	      <td>MstEmpNoJamsos</td>
	      <td><input type="text" name="MstEmpJamsos" placeholder="MstEmpNoJamsos" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>MstEmpAddress</td>
	      <td><input type="text" name="MstEmpAddress" placeholder="MstEmpAddress" class="form-control"/></td>
        </tr>
	    <tr>
	      <td >MstEmpPassword</td>
	      <td><input type="password" name="MstEmpPassword" placeholder="MstEmpPassword" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>MstEmpLevel</td>
	      <td><input type="text" name="MstEmpLevel" placeholder="MstEmpLevel" class="form-control"/></td>
        </tr>
	    <tr>
	      <!--<td></td>-->
	      <td  colspan="2"><button type="submit" name="simpan" class="btn btn-primary btn-lg">
  <span class="glyphicon glyphicon-save"></span> Simpan
</button>&nbsp;&nbsp;&nbsp;<button type="Reset" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-pencil"></span> Reset
</button></td>
        </tr>
    </table>	
    </form>
		
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover">
			<tr>
				<th id="judul">No</th>
				<th id="judul">MstEmpID</th>
				<th id="judul">MstEmpNIK</th>
				<th id="judul">MstEmpName</th>
				<th id="judul">MstEmpDivision</th>
				
				<th id="judul">MstEmpEdu</th>
				<th id="judul">MstEmpReligi</th>
				<th id="judul">MstEmpBirdthDate</th>
				<th id="judul">MstEmpJoinDate</th>
				<th id="judul">MstEmpNoRek</th>
				
				<th id="judul">MstEmpNoKtp</th>
				<th id="judul">MstEmpNoNpwp</th>
				<th id="judul">MstEmpNoJamsos</th>
				<th id="judul">MstEmpAddress</th>
				
				<th id="judul">MstEmpPassword</th>
				<th id="judul">MstEmpLevel</th>
				
				
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstEmp; ?></td>
				<td class="hd"><?php echo $a->MstEmpNIK; ?></td>
				<td class="hd"><?php echo $a->MstEmpName; ?></td>
				<td class="hd"><?php echo $a->MstEmpDiv; ?></td>
				<td class="hd"><?php echo $a->MstEmpEdu; ?></td>
				
				<td class="hd"><?php echo $a->MstEmpReligi; ?></td>
				<td class="hd"><?php echo $a->MstEmpBirdthDate; ?></td>
				<td class="hd"><?php echo $a->MstEmpJoinDate; ?></td>
				<td class="hd"><?php echo $a->MstEmpNoRek; ?></td>
				<td class="hd"><?php echo $a->MstEmpNoKtp; ?></td>
				
				<td class="hd"><?php echo $a->MstEmpNoNpwp; ?></td>
				<td class="hd"><?php echo $a->MstEmpNoJamsos; ?></td>
				<td class="hd"><?php echo $a->MstEmpAddress; ?></td>
				<td class="hd"><?php echo $a->MstEmpPassword; ?></td>
				<td class="hd"><?php echo $a->MstEmpLevel; ?></td>
				<td class="hd"><a class="btn btn-default  " href="<?php echo site_url ('mstemployee/edit/'.$a->MstEmp)?>" ">Edit &nbsp;<span class="glyphicon glyphicon-wrench"></span></a></td><td class="hd">
				<a class="btn btn-default   " href="<?php echo site_url ('mstemployee/hapus/'.$a->MstEmp)?>" ">Hapus &nbsp;<span class="glyphicon glyphicon-remove-sign"></span></a>
 
</td></tr>
			
			<?php } ?>
		</table>
		<hr>
		<p>
			</div>
		</p></div>
	</body>
</html>
