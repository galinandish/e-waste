<?php
 
  $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="delete from bidder where bidder_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('Values Deleted');
document.location="bidder_view.php";
</script>