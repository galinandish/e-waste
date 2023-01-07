<table width="200" border="1" align="center">
  <tr>
    <td>Product Id</td>
    <td>Category Id</td>
    <td>Product Name</td>
    <td>Product Details</td>
	<td>delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from product";
$res=mysql_query($sql);

  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row['0']; ?> </td>
    <td><?php echo $row['1']; ?></td>
    <td><?php echo $row['2'];  ?></td>
    <td><?php echo $row['3'];?> </td>
	<td><a href="product_delete.php?id=<?php echo $row['pro_id']; ?>">delete</a></td>
	<td><a href="product_edit.php?id=<?php echo $row['pro_id']; ?>">edit</a></td>
  </tr>
  
  <?php
  }
  ?>
</table>

