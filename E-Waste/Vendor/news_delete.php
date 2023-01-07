<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="delete from news where news_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('row deleted');
document.location="news_view.php";
</script>