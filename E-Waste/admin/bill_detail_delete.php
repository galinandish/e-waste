<?php
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1'];
include('dbconnection.php');
$sql="delete from bill_details where bd_id='$id1'";
$res=mysql_query($sql);

?>
<script>
alert('row deleted');
document.location="bill_detail.php?id=<?php echo $id; ?>";
</script>