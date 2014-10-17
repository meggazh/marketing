<table>
    <thead>
        <tr>
            <th>asd</th>
            <th>asd2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="test[]"/></td>
           <td><input type="text" name="test2[]"/></td>
       </tr>
        <tr id="tambah">
            <td colspan="2"><button id="tambah2">tambah</button></td>
        </tr>
    </tbody>
</table>    
<script>
$(document).ready(function(){
   var  data = "<tr><td><input type=\"text\" name=\"test[]\"/></td><td><input type=\"text\" name=\"test2[]\"/></td></tr>";

       
    $("#tambah2").click(function(){
        alert('asd');
        $("#tambah").before(data);
    }) 
});
</script>