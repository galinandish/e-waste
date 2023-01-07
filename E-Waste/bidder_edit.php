<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from  bidder where bidder_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<form name="form1" method="post" action="bidder_update.php">
  <p>&nbsp;</p>
  <table width="200" border="1">
   <td><input name="bidder_id" type="hidden" id="bidder_id" value="<?php echo $row['bidder_id'];?>"></td>
    <tr>
      <td>Bidder Name </td>
      <td><input name="b_name" type="text" id="b_name" value="<?php echo $row['b_name'];?>"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact" type="text" id="contact" value="<?php echo $row['contact'];?>"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email" type="text" id="email" value="<?php echo $row['email'];?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"><?php echo $row['address'];?></textarea></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input name="username" type="text" id="username" value="<?php echo $row['username'];?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="text" id="password" value="<?php echo $row['password'];?>"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" value="<?php echo $row['status'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
