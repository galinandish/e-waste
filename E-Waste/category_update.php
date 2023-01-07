<?php 
$cat_id=$_POST['cat_id'];
$cat_name=$_POST['cat_name'];
$cat_details=$_POST['cat_details'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update category set cat_name='$cat_name',cat_details='$cat_details' where cat_id='$cat_id'";
$res=mysql_query($sql);


?>
<script>
alert('Values updated');
document.location="category_view.php";
</script>