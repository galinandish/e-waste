<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from product where product_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('row deleted');
document.location="product_view.php";
</script>