<?php
$name=$_POST['name'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$address=$_POST['address'];
$h=$_POST['h'];
include('dbconnection.php');
$sql="insert into doctor values(null,'$name','$contact_no','$email_id','$address','$h')";
mysql_query($sql);

$sql1="insert into login values('$email_id','$contact_no','doctor')";
mysql_query($sql1);
?>

<script>
alert('Thank You for Registration');
document.location="doctor_view.php";
</script>