<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from remedies where remedies_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('row deleted');
document.location="remedies_view.php";
</script>