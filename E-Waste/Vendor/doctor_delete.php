<?php
$id=$_REQUEST['id'];
include('dbconnection.php');

$sql="delete from doctor where d_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="doctor_view.php";
</script>