<?php
$name=$_POST['name'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$pwd=$_POST['pwd'];
include('dbconnection.php');
$sql="insert into registration values(null,'$name','$address','$contact_no','$email_id','$pwd')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="registration_view.php";
</script>