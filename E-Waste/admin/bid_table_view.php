<table width="200" border="1" align="center">
  <tr>
    <td>#</td>
    <td>Sale Id </td>
    <td>Bidder Id </td>
    <td>Amount</td>
    <td>Bid Date </td>
	<td>Delete</td>
	<td>Edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from bid_table";
$res=mysql_query($sql);

  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row['0']; ?> </td>
    <td><?php echo $row['1']; ?></td>
    <td><?php echo $row['bidder_id'];  ?></td>
    <td><?php echo $row['3'];?> </td>
    <td><?php echo $row['4'];?></td>
	<td><a href="bid_table_delete.php?id=<?php echo $row['bid_id']; ?>">delete</a> </td>
	<td><a href="bid_table_edit.php?id=<?php echo $row['bid_id']; ?>">edit</a> </td>
  </tr>
  
  <?php
  }
  ?>
</table>
