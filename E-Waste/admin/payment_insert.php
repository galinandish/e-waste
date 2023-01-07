<?php

$bidder_id=$_POST['bidder_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$amt=$_POST['amt'];
$total=$_POST['total'];
$pay_status=$_POST['pay_status'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);

$sql="insert into payment values(null,'$bidder_id','$pro_id','$qty','$amt','$total','$pay_status')";
$res=mysql_query($sql);


?>
<script>
alert('Values inserted');
document.location="payment_view.php";
</script>