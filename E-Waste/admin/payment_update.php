<?php
$pay_id=$_POST['pay_id'];
$bidder_id=$_POST['bidder_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$amt=$_POST['amt'];
$total=$_POST['total'];
$pay_status=$_POST['pay_status'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);

$sql="update  payment  set  bidder_id='$bidder_id',pro_id='$pro_id',qty='$qty',amt='$amt',total='$total',pay_status='$pay_status' where pay_id='$pay_id'";
$res=mysql_query($sql);


?>
<script>
alert('Values updated');
document.location="payment_view.php";
</script>