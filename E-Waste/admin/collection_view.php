<table width="383" border="1" align="center">
  <tr>
    <td width="65">Collection ID</td>
    <td width="50">Vendor Id</td>
    <td width="52">Product Id </td>
    <td width="51">Quantity</td>
    <td width="131">Upload Date</td>
	<td>delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from collection";
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
	<td><a href="collection_delete.php?id=<?php echo $row['coll_id']; ?>">delete</a> </td>
	<td><a href="collection_edit.php?id=<?php echo $row['coll_id']; ?>">edit</a> </td>
  </tr>
  
  <?php
  }
  ?>
</table>
