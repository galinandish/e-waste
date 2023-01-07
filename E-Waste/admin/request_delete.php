<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from request where request_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="request_view.php";
</script>