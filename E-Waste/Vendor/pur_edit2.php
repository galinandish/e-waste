<?php
$pdid=$_POST['pdid'];
$poid=$_POST['poid'];
$pro=$_POST['pro'];
$qty=$_POST['qty'];


include('dbconnection.php');

$sql="update pur_details set rqty='$qty',status='received' where pdid='$pdid'";
mysql_query($sql);

$sql2="select * from product where product_id='$pro'";
$res2=mysql_query($sql2);
$row2=mysql_fetch_array($res2);

$st=$row2['stock'];
$sto=$st+$qty;

$sql1="update product set stock='$sto' where product_id='$pro'";
$res1=mysql_query($sql1);
//$row1=mysql_fetch_array($res1);"
?>

<script>
alert('Thank You for Updating');
document.location="pur_detail_v.php?id=<?php echo $poid; ?>";
</script>