<?php
$name=$_POST['name'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$oname=$_POST['oname'];
$email_id=$_POST['email_id'];
$gst=$_POST['gst'];
$l=$_POST['l'];
include('dbconnection.php');
$sql="insert into vendor values(null,'$name','$address','$contact_no','$oname','$email_id','$gst','$l')";
mysql_query($sql);

$sql2="insert into login values('$email_id','$contact_no','vendor')";
mysql_query($sql2);
?>

<script>
alert('Thank You for Registration');
document.location="vendor_view.php";
</script>