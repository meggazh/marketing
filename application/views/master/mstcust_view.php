<div class="col-lg-10">
	<body>
	
<div class="container--fluid">
		<h1><?php echo $judul; ?></h1>
		
			<form method="POST" action="<?php echo site_url('mstcus/proses_tambah_cus'); ?>">
			<legend>
<!--Button Add New Approval-->
			<h3 ><button type="button" class="btn btn-default btn-lg">Add New Approval &nbsp;<span class="glyphicon glyphicon-plus"></span></button></br></br>
		
				
	  <table class="table table-bordered ">
	    <tr>
	      <td><input type="hidden" name="MstCustID"/></td>
        </tr>
		<tr>
	      <td>Kode</td>
	      <td><input type="text" name="MstCustNo" class="form-control" value="<?php echo $new_id; ?>" readonly/></td>
        </tr>
        <tr>
	      <td>Nama </td>
	      <td><input type="text" name="MstCustIDName" placeholder="MstCustIDName" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDAbbr" placeholder="MstCustIDAbbr" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDAddress1" placeholder="MstCustIDAddress1" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDAddress2" placeholder="MstCustIDAddress2" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDAddress3" placeholder="MstCustIDAddress3" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDPIC1" placeholder="MstCustIDPIC1" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDPIC2" placeholder="MstCustIDPIC2" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstCustIDPIC3" placeholder="MstCustIDPIC3" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>Approval 2</td>
	      <td><input type="text" name="MstCustIDNoTlp" placeholder="MstCustIDNoTlp" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 2</td>
	      <td><input type="text" name="MstCustIDNofax" placeholder="MstCustIDNofax" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 2</td>
	      <td><input type="text" name="MstCustIDPICEmail1" placeholder="MstCustIDPICEmail1" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 2</td>
	      <td><input type="text" name="MstCustIDPICEmail2" placeholder="MstCustIDPICEmail2" class="form-control"/></td>
        </tr>
		<tr>
	      <td>Approval 2</td>
	      <td><select class="form-control" name="MstPayID">
		<option value="" selected>--select Payment--</option>
		<?php 
			if(empty($bayar)){
		echo '<option value=""></option>';
			}else{
         foreach($bayar as $row){
             echo '<option value="'.$row->MstPayID.'">'.$row->MstPaySyarat.'</option>';
         }
			} ?>
       </select>
	   </td>
        </tr>
	     <!-- <td>&nbsp;</td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg"></td>
        </tr>
    </table>	
    </form>
		
		<hr>
		
		<table cellpadding="2" cellspacing="2" style="font-weight:bold;font-size:13px;" class="table table-bordered table-hover ">
			<tr>
				<th id="judul">No</th>
				<th id="judul">MstCustIDName</th>
				<th id="judul">MstCustIDAbbr</th>
				<th id="judul">MstCustIDAddress1</th>
				<th id="judul">MstCustIDAddress2</th>
				<th id="judul">MstCustIDAddress3</th>
				<th id="judul">MstCustIDPIC1</th>
				<th id="judul">MstCustIDPIC2</th>
				<th id="judul">MstCustIDPIC3</th>
				<th id="judul">MstCustIDNoTlp</th>
				<th id="judul">MstCustIDNofax</th>
				<th id="judul">MstCustIDPICEmail1</th>
				<th id="judul">MstCustIDPICEmail2</th>
				<th id="judul">MstPayID</th>
				<th id="judul" colspan="2">Action</th>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstCustID; ?></td>
				<td class="hd"><?php echo $a->MstCustIDName; ?></td>
				<td class="hd"><?php echo $a->MstCustIDAbbr; ?></td>
				<td class="hd"><?php echo $a->MstCustIDAddress1; ?></td>
				<td class="hd"><?php echo $a->MstCustIDAddress2; ?></td>
				<td class="hd"><?php echo $a->MstCustIDAddress3; ?></td>
				<td class="hd"><?php echo $a->MstCustIDPIC1; ?></td>
				<td class="hd"><?php echo $a->MstCustIDPIC2; ?></td>
				<td class="hd"><?php echo $a->MstCustIDPIC3; ?></td>
				<td class="hd"><?php echo $a->MstCustIDNoTlp; ?></td>
				<td class="hd"><?php echo $a->MstCustIDNofax; ?></td>
				<td class="hd"><?php echo $a->MstCustIDPICEmail1; ?></td>
				<td class="hd"><?php echo $a->MstCustIDPICEmail2; ?></td>
				<td class="hd"><?php echo $a->MstPayID; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mstcus/edit/'.$a->MstCustID)?>">Edit</a></td>
				<td><a href="<?php echo site_url ('mstcus/hapus/'.$a->MstCustID)?>">Delete</a></td>
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
