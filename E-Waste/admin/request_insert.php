<?php
$reg_id=$_POST['reg_id'];
$req_date=$_POST['req_date'];
$req_details=$_POST['req_details'];
include('dbconnection.php');
$sql="insert into request values(null,'$reg_id','$req_date','$req_details')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="request_view.php";
</script>