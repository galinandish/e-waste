<?php
$id=$_POST['id'];
$reg_id=$_POST['reg_id'];
$rate=$_POST['rate'];
//$final_rate=$_POST['final_rate'];
//$last_date=$_POST['last_date'];

include('dbconnection.php');
$sql="insert into bid values(null,'$id','$reg_id','$rate','pending')";
$res=mysql_query($sql);

?>
<script>
alert('Value Inserted');
document.location="sales_view.php";
</script>