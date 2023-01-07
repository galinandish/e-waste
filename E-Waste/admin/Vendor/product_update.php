<?php
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$c=$_POST['c'];
$b=$_POST['b'];
$p=$_POST['p'];
$cg=$_POST['cg'];
$sg=$_POST['sg'];

include('dbconnection.php');

$sql="update product set product_name='$product_name',composition='$c',benefits='$b',price='$p',cgst='$cg',sgst='$sg' where product_id='$product_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="product_view.php";
</script>