<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from pur_order where poid='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="pur_v.php";
</script>