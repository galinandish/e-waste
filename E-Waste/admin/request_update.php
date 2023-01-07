<?php
$request_id=$_POST['request_id'];
$reg_id=$_POST['reg_id'];
$req_date=$_POST['req_date'];
$req_details=$_POST['req_details'];
include('dbconnection.php');

$sql="update request set reg_id='$reg_id',req_date='$req_date',req_details='$req_details' where request_id='$request_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="request_view.php";
</script>