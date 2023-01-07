<?php
//$bdate=$_POST['bdate'];
$saleid=$_REQUEST['saleid'];
$bid=$_REQUEST['bid'];

include('dbconnection.php');
$sql="select * from bid b,sales s,product p,registration r where b.sale_id=s.sale_id and s.product_id=p.product_id and b.reg_id=r.reg_id and b.sale_id='$saleid' and b.bid_id='$bid'";
$res=mysql_query($sql);

$row=mysql_fetch_array($res);

$pid=$row['product_id'];
$amt=$row['amt'];
$qty=$row['qty'];
$rid=$row['reg_id'];

$amt1=$amt*$qty;

$cg=($amt1*6)/100;
$sg=($amt1*6)/100;

$total=$amt1+$cg+$sg;

$date=date('Y-m-d');

$sql1="insert into bill_details values(null,'$pid','$amt','$qty','$cg','$sg','$total','$date','$rid')";
mysql_query($sql1);

$sql2="update bid set status='confirm' where bid_id='$bid' and sale_id='$saleid'";
mysql_query($sql2);

$sql3="update bid set status='rejected' where sale_id='$saleid' and bid_id!='$bid'";
mysql_query($sql3)

?>

<script>
alert('Bill Generated');
document.location="bill_detail.php";
</script>