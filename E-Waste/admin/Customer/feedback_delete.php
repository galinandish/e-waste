<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from feedback where feedback_id='$id'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="feedback_view.php";
</script>