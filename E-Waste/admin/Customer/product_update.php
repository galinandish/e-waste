<?php
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$composition_id=$_POST['composition_id'];
$remedies_id=$_POST['remedies_id'];
$image=$_POST['image'];

include('dbconnection.php');

$sql="update product set product_name='$product_name',composition_id='$composition_id',remedies_id='$remedies_id',image='$image' where product_id='$product_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="product_view.php";
</script>