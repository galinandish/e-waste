<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from vendor_payment where vp_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<body>
<form name="form1" method="post" action="vendor_payment_update.php">
  <table width="200" border="1">
  <input name="vp_id" type="hidden" id="vp_id" value="<?php echo $row['vp_id'];?>">
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
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" value="<?php echo $row['rate'];?>"></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><input name="total" type="text" id="total" value="<?php echo $row['total'];?>"></td>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
