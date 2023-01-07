<?php
$remedies_id=$_POST['remedies_id'];
$description=$_POST['description'];
include('dbconnection.php');
$sql="update remedies set description='$description' where remedies_id='$remedies_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="remedies_view.php";
</script>