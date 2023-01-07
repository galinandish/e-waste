<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from payment where pay_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<body>
<form name="form1" method="post" action="payment_update.php">
  <p>&nbsp;</p>
  <table width="200" border="1">
  <input name="pay_id" type="hidden" id="pay_id" value="<?php echo $row['pay_id'];?>">
    <tr>
      <td>Bidder Id </td>
      <td><input name="bidder_id" type="text" id="bidder_id" value="<?php echo $row['bidder_id'];?>"></td>
    </tr>
    <tr>
      <td>Product Id </td>
      <td><input name="pro_id" type="text" id="pro_id" value="<?php echo $row['pro_id'];?>"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty" value="<?php echo $row['qty'];?>"></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amt" type="text" id="amt" value="<?php echo $row['amt'];?>"></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><input name="total" type="text" id="total" value="<?php echo $row['total'];?>"></td>
    </tr>
    <tr>
      <td>Payment Status </td>
      <td><input name="pay_status" type="text" id="pay_status" value="<?php echo $row['pay_status'];?>"></td>
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
</form>
</body>
</html>
