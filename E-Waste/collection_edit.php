<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from collection where coll_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>
<body>
<form name="form1" method="post" action="collection_update.php">
  <table width="200" border="1">
 <input name="coll_id" type="hidden" id="coll_id" value="<?php echo $row['coll_id'];?>">
    <tr>
      <td>Vendor ID </td>
      <td><input name="v_id" type="text" id="v_id" value="<?php echo $row['v_id'];?>"></td>
    </tr>
    <tr>
      <td>Product ID </td>
      <td><input name="pro_id" type="text" id="pro_id" value="<?php echo $row['pro_id'];?>"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty" value="<?php echo $row['qty'];?>"></td>
    </tr>
    <tr>
      <td>Uplode Date </td>
      <td><input name="upload_date" type="text" id="upload_date" value="<?php echo $row['upload_date'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
