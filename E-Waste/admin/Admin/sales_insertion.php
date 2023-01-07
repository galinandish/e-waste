<?php
$product_id=$_POST['product_id'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
//$final_rate=$_POST['final_rate'];
$last_date=$_POST['last_date'];

include('dbconnection.php');
$sql="insert into sales values(null,'$product_id','$qty','$rate','$last_date')";
$res=mysql_query($sql);

?>
<script>
alert('Value Inserted');
document.location="sales_view.php";
</script>