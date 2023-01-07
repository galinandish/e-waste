<table width="200" border="1" align="center">
  <tr>
    <td>Bidder ID</td>
    <td>BIdder Name</td>
    <td>Contact </td>
    <td>Email</td>
    <td>Address</td>
    <td>User Name</td>
    <td>Password </td>
	<td>Status</td>
	<td>Delete</td>
	<td>edit</td>
  </tr>
  
  <?php
  
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="select * from  bidder";
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
	<td><?php echo $row['7'];?></td>
	<td><a href="bidder_delete.php?id=<?php echo $row['bidder_id'];?>">Delete</a></td>
	<td><a href="bidder_edit.php?id=<?php echo $row['bidder_id'];?>">edit</a></td>
  </tr>
    <?php
  }
  ?>
</table>
