<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="delete from bid_table where bid_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('Values Deleted');
document.location="bid_table_view.php";
</script>