<?php
$sale_id=$_POST['sale_id'];
$bidder_id=$_POST['bidder_id'];
$amt=$_POST['amt'];
$bid_date=$_POST['bid_date'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into bid_table values(null,'$sale_id','$bidder_id','$amt','$bid_date')";
$res=mysql_query($sql);


?>
<script>
alert('Values inserted');
document.location="bid_table_view.php";
</script>