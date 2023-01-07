<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="delete from vendor_payment where vp_id='$id'";
$res=mysql_query($sql);
?>
<script>
alert('Values Deleted');
document.location="vendor_payment_view.php";
</script>