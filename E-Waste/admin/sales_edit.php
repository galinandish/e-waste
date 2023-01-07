<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from sales where sale_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<body>
<form name="form1" method="post" action="sales_update.php">
  <table width="200" border="1">
  <input name="sale_id" type="hidden" id="sale_id" value="<?php echo $row['sale_id'];?>">
    <tr>
      <td>Product ID </td>
      <td><input name="pro_id" type="text" id="pro_id" value="<?php echo $row['pro_id'];?>"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty" value="<?php echo $row['qty'];?>"></td>
    </tr>
    <tr>
      <td>Starting Rate </td>
      <td><input name="starting_rate" type="text" id="starting_rate" value="<?php echo $row['starting_rate'];?>"></td>
    </tr>
    <tr>
      <td>Final Rate </td>
      <td><input name="final_rate" type="text" id="final_rate" value="<?php echo $row['final_rate'];?>"></td>
    </tr>
    <tr>
      <td>Laste Date </td>
      <td><input name="last_date" type="text" id="last_date" value="<?php echo $row['last_date'];?>"></td>
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
