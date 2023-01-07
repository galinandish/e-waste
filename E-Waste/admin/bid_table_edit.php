<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from bid_table where bid_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<body>
<form name="form1" method="post" action="bid_table_update.php">
  <table width="208" border="1">
  <td><input name="bid_id" type="hidden" id="bid_id" value="<?php echo $row['bid_id'];?>"></td>
    <tr>
      <td>Sale_ID</td>
      <td><input name="sale_id" type="text" id="sale_id" value="<?php echo $row['sale_id'];?>"></td>
    </tr>
    <tr>
      <td>Bidder ID </td>
      <td><input name="bidder_id" type="text" id="bidder_id" value="<?php echo $row['bidder_id'];?>"></td>
    </tr>
    <tr>
      <td width="48">Amount</td>
      <td width="144"><input name="amt" type="text" id="amt" value="<?php echo $row['amt'];?>"></td>
    </tr>
    <tr>
      <td height="78">Bid Date</td>
      <td><input name="bid_date" type="text" id="bid_date" value="<?php echo $row['bid_date'];?>"></td>
    </tr>
    <tr>
      <td height="71">&nbsp;</td>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
