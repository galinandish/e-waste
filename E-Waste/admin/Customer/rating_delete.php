<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from rating where rating_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="rating_view.php";
</script>