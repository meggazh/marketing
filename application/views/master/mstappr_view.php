<div class="col-lg-10">

		<h1><?php echo $judul; ?></h1>
		
			<form method="POST" action="<?php echo site_url('mstappr/proses_tambah_appr'); ?>">
			<legend>
<!--Button Add New Approval-->			
	  <table class="table table table-bordered ">
	    <tr>
	      <input type="hidden" name="MstApprID" class="form-control"/>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstAppr1" placeholder="MstAppr1" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>Approval 2</td>
	      <td><input type="text" name="MstAppr2" placeholder="MstAppr2" class="form-control"/></td>
        </tr>
	    <tr>
	      <td >Approval 3</td>
	      <td><input type="text" name="MstAppr3" placeholder="MstAppr3" class="form-control"/></td>
        </tr>
	    <tr>
	      <td>Approval 4</td>
	      <td><input type="text" name="MstAppr4" placeholder="MstAppr4" class="form-control"/></td>
        </tr>
	    <tr>
		 <tr>
	      <td>Approval 4</td>
	      <td><input type="text" name="idMstUser" placeholder="idMstUser" class="form-control"/></td>
        </tr>
	    <tr>
	      <!--<td></td>-->
	      <td  colspan="2" width="60"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg" >&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg" ></td>
        </tr>
    </table>	
    </form>
		
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover">
			<tr>
				<th id="judul">No</th>
				<th id="judul">Appropal1</th>
				<th id="judul">Appropal3</th>
				<th id="judul">Appropal3</th>
				<th id="judul">Appropal4</th>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstApprID; ?></td>
				<td class="hd"><?php echo $a->MstAppr1; ?></td>
				<td class="hd"><?php echo $a->MstAppr2; ?></td>
				<td class="hd"><?php echo $a->MstAppr3; ?></td>
				<td class="hd"><?php echo $a->MstAppr4; ?></td>
				<td class="hd"><a class="btn btn-default  btn-block" href="<?php echo site_url ('mstappr/edit/'.$a->MstApprID)?>" ">Edit</a></td><td class="hd">
				<a class="btn btn-default   btn-block" href="<?php echo site_url ('mstappr/hapus/'.$a->MstApprID)?>" ">Hapus</a>
 
</td></tr>
			
			<?php } ?>
		</table>
		<hr>
		<p>
			
		</p></div>
</div>