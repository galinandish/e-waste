<?php
$id=$_REQUEST['id'];
include('dbconnection.php');

$sql="delete from vendor where v_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="vendor_view.php";
</script>