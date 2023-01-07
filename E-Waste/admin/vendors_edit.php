<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from vendors where v_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<body>
<form name="form1" method="post" action="vendors_update.php">
  <p>&nbsp;</p>
  <table width="200" border="1">
  <input name="v_id" type="hidden" id="v_id" value="<?php echo $row['v_id'];?>">
    <tr>
      <td>Vendor Name </td>
      <td><input name="v_name" type="text" id="v_name" value="<?php echo $row['v_name'];?>"></td>
    </tr>
    <tr>
      <td> Address </td>
      <td><textarea name="v_address" id="v_address"><?php echo $row['v_address'];?></textarea></td>
    </tr>
    <tr>
      <td> Contact No </td>
      <td><input name="v_contact" type="text" id="v_contact" value="<?php echo $row['v_contact'];?>"></td>
    </tr>
    <tr>
      <td> Email Id </td>
      <td><input name="v_email" type="text" id="v_email" value="<?php echo $row['v_email'];?>"></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input name="v_username" type="text" id="v_username" value="<?php echo $row['v_username'];?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="v_password" type="text" id="v_password" value="<?php echo $row['v_password'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
          <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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
