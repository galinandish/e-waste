<?php
$pro_id=$_POST['pro_id'];
$cat_id=$_POST['cat_id'];
$pro_name=$_POST['pro_name'];
$pro_details=$_POST['pro_details'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update  product set cat_id='$cat_id',pro_name='$pro_name',pro_details='$pro_details' where pro_id='$pro_id'";
$res=mysql_query($sql);

?>

<script>
alert('Value updated');
document.location="product_view.php";
</script>