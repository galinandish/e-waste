<?php
$reg_id=$_POST['reg_id'];
$product_id=$_POST['product_id'];
$rating=$_POST['rating'];
include('dbconnection.php');
$sql="insert into rating values(null,'$reg_id','$product_id','$rating')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="rating_view.php";
</script>