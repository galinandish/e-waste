<?php
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1'];
include('dbconnection.php');
$sql="delete from pur_details where pdid='$id1'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="pur_detail.php?id=<?php echo $id; ?>";
</script>