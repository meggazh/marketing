
<body>
<table class="table table table-bordered ">
	    <tr>
		<td>ID</td>
	      <td><input type="text" name="idMstAppr" class="form-control"/></td>
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
	      <!--<td></td>-->
	      <td  colspan="2" width="60"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg" >&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-inverse btn-lg" ></td>
        </tr>
    </table>

		<select class="tes">
		<?php
		foreach($daerah->result_array() as $d)
		{?>
			<option value="<?php echo $d['MstCustID'];?>"><?php echo $d['MstCustIDName'];?></option>
		<?php
		}?>
		</select>

</body>

