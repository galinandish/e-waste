<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="delete from category where cat_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('Values Deleted');
document.location="category_view.php";
</script>