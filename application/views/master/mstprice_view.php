<div class="col-lg-10">
	<body>
<div class="container-fluid">

		<h1><?php echo $judul; ?></h1>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstprice/proses_tambah_price'); ?>">
			<legend>
	
<!--Button Add New Approval-->
			<h3 ><button type="button" class="btn btn-default btn-lg">Add New Approval &nbsp;<span class="glyphicon glyphicon-plus"></span></button></br></br>
	  <table class="table table table-bordered ">
	    <tr>
	      <td><input type="hidden" name="MstPriceID"/></td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstPriceUnitPrice" placeholder="MstPriceUnitPrice" class="form-control"/></td>
        </tr>
		  <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstPriceExpiredDate" placeholder="MstPriceExpiredDate" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Approval 1</td>
	      <td><input type="text" name="MstPriceStatus" placeholder="MstPriceStatus" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Produk</td>
	      <td><select class="form-control" name="MstProductID">
          <option value="" selected>--select Product--</option>
            <?php 
             if(empty($produk)){
             echo '<option value=""></option>';
                }else{
               foreach($produk as $row){
               echo '<option value="'.$row->MstProductID.'">'.$row->MstProductType.'</option>';
             }
           } ?>
      </select>
	  </td>
        </tr>
	     <!-- <td>&nbsp;</td>-->
		 <tr>
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;<input type="reset" name="reseet" value="Simpan" class="btn btn-inverse btn-lg"></td>
        </tr>
    </table>	
    </form>
		<!--</fieldset>-->
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" style="font-weight:bold;font-size:13px;" class="table table-bordered table-hover">
			<tr>
				<th id="judul">No</td>
				<th id="judul">MstPriceUnitPrice</td>
				<th id="judul">MstPriceExpiredDate</td>
				<th id="judul">MstPriceStatus</td>
				<th id="judul">produk</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->MstPriceID; ?></td>
				<td class="hd"><?php echo $a->MstPriceUnitPrice; ?></td>
				<td class="hd"><?php echo $a->MstPriceExpiredDate; ?></td>
				<td class="hd"><?php echo $a->MstPriceStatus; ?></td>
				<td class="hd"><?php echo $a->MstProductID; ?></td>
				<td class="hd"><a class="btn btn-default"href="<?php echo site_url ('mstprice/edit/'.$a->MstPriceID)?>">Edit</a></td><td class="hd">
				<a class="btn btn-default" href="<?php echo site_url ('mstprice/hapus/'.$a->MstPriceID)?>">Delete</a></td>
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
