<table width="200" border="1" align="center">
  <tr>
    <td>Payment Id</td>
    <td>Bidder Id</td>
    <td>Product Id </td>
    <td>Quantity</td>
    <td>Amount</td>
    <td>Total</td>
    <td>Pay Status</td>
	<td>Delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from payment";
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
    <td><?php echo $row['6'];?></td>
	<td><a href="payment_delete.php?id=<?php echo $row['pay_id']; ?>">delete</a></td>
	<td><a href="payment_edit.php?id=<?php echo $row['pay_id']; ?>">edit</a></td>
  </tr>
  
  <?php
  }
  ?>
</table>
