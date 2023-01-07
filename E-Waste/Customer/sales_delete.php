<?php
include('dbconnection.php');
$id=$_REQUEST['id'];
$sql="delete from sales where sale_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('Values Deleted');
document.location="sales_view.php";
</script>