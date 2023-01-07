<table width="200" border="1" align="center">
  <tr>
    <td>Vendor Id</td>
    <td>Vendor Name</td>
    <td>Vendor Address </td>
    <td>Vendor Contact</td>
    <td>Vendor Email</td>
    <td>Vendor UserName</td>
    <td>Vendor Password </td>
	<td>delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from vendors";
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
	<td><a href="vendors_delete.php?id=<?php echo $row['v_id']; ?>">delete</a></td>
	<td><a href="vendors_edit.php?id=<?php echo $row['v_id']; ?>">edit</a></td>
  </tr>
  
  <?php
  }
  ?>
</table>
