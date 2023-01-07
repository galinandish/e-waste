<table width="200" border="1" align="center">
  <tr>
    <td>Vendor Produvt ID</td>
    <td>Vendor Id</td>
    <td>Product Id </td>
    <td>Quantity</td>
    <td>Rate</td>
    <td>Total</td>
	<td>delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from  vendor_payment";
$res=mysql_query($sql);

  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row['0']; ?> </td>
    <td><?php echo $row['1']; ?></td>
    <td><?php echo $row['2'];  ?></td>
    <td><?php echo $row['3'];?> </td>
    <td><?php echo $row['4']; ?></td>
    <td><?php echo $row['5']; ?></td>
	<td><a href="vendor_payment_delete.php?id=<?php echo $row['vp_id']; ?>">delete</a></td>
	<td><a href="vendor_payment_edit.php?id=<?php echo $row['vp_id']; ?>">edit</a></td>
  </tr>
  
  <?php
  }
  ?>
</table>
