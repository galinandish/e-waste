<?php
$v_id=$_POST['v_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
$total=$_POST['total'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into vendor_payment values(null,'$v_id','$pro_id','$qty','$rate','$total')";
$res=mysql_query($sql);

?>

<script>
alert('Value Inserted');
document.location="vendor_payment_view.php";
</script>