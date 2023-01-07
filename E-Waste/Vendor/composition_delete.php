<?php
$id=$_REQUEST['id'];
include('dbconnection.php');

$sql="delete from composition where composition_id='$id'";
$res=mysql_query($sql);
?>

<script>
alert('row deleted');
document.location="composition_view.php";
</script>