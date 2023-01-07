<?php
$bid_id=$_POST['bid_id'];
$sale_id=$_POST['sale_id'];
$bidder_id=$_POST['bidder_id'];
$amt=$_POST['amt'];
$bid_date=$_POST['bid_date'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update bid_table set sale_id='$sale_id',bidder_id='$bidder_id',amt='$amt',bid_date='$bid_date' where bid_id='$bid_id'";
$res=mysql_query($sql);


?>
<script>
alert('Values updated');
document.location="bid_table_view.php";
</script>