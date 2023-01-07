<?php
$reg_id=$_POST['reg_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$pwd=$_POST['pwd'];

include('dbconnection.php');

$sql="update registration set name='$name',address='$address',contact_no='$contact_no',email_id='$email_id',pwd='$pwd' where reg_id='$reg_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="registration_view.php";
</script>