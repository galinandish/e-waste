<table width="200" border="1" align="center">
  <tr>
    <td>Category Id</td>
    <td>Category Name </td>
    <td>Category Details </td>
	<td>Delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from category";
$res=mysql_query($sql);

  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row['0']; ?> </td>
    <td><?php echo $row['1']; ?></td>
    <td><?php echo $row['2']; ?></td>
	<td><a href="category_delete.php?id=<?php echo $row['cat_id'];?>">delete</a></td>
	<td><a href="category_edit.php?id=<?php echo $row['cat_id'];?>">edit</a></td>
  </tr>
  
  <?php
  }
  ?>
</table>

