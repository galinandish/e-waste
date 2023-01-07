<table width="200" border="1" align="center">
  <tr>
    <td>Salse ID</td>
    <td>Product ID</td>
    <td>Quantity </td>
    <td>Starting Rate</td>
    <td>Final Rate</td>
    <td>Laste Date</td>
	<td>delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from sales";
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
	<td><a href="sales_delete.php?id=<?php echo $row['sale_id']; ?>">delete</a></td>
	<td><a href="sales_edit.php?id=<?php echo $row['sale_id']; ?>">edit</a></td>
  </tr>
  
  <?php
  }
  ?>
</table>
