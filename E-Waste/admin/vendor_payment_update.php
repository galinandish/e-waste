<?php
$vp_id=$_POST['vp_id'];
$v_id=$_POST['v_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
$total=$_POST['total'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update vendor_payment set v_id='$v_id',pro_id='$pro_id',qty='$qty',rate='$rate',total='$total' where vp_id='$vp_id'";
$res=mysql_query($sql);

?>

<script>
alert('Value updated');
document.location="vendor_payment_view.php";
</script>