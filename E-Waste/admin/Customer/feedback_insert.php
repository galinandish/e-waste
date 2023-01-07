<?php
$request_id=$_POST['request_id'];
$feedback=$_POST['feedback'];
$feedback_date=$_POST['feedback_date'];
include('dbconnection.php');
$sql="insert into feedback values(null,'$request_id','$feedback','$feedback_date')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="feedback_view.php";
</script>
