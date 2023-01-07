<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from  category where cat_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<body>
<form name="form1" method="post" action="category_update.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="1">
  <td><input name="cat_id" type="hidden" id="cat_id" value="<?php echo $row['cat_id'];?>"></td>
    <tr>
      <td>Category Name </td>
      <td><input name="cat_name" type="text" id="cat_name" value="<?php echo $row['cat_name'];?>"></td>
    </tr>
    <tr>
      <td>Category Details </td>
      <td><input name="cat_details" type="text" id="cat_details" value="<?php echo $row['cat_details'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
</form>
</body>
</html>
