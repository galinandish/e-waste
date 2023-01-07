<?php
$id=$_REQUEST['id'];
include('dbconnection.php');

$sql="delete from registration where reg_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="registration_view.php";
</script>