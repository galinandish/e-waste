<?php
$feedback_id=$_POST['feedback_id'];
$request_id=$_POST['request_id'];
$feedback=$_POST['feedback'];
$feedback_date=$_POST['feedback_date'];

include('dbconnection.php');
$sql="update feedback set request_id='$request_id',feedback='$feedback',feedback_date='$feedback_date' where feedback_id='$feedback_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="feedback_view.php";
</script>
