<?php
$bidder_id=$_POST['bidder_id'];
$b_name=$_POST['b_name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$status=$_POST['status'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update bidder set  b_name='$b_name',contact='$contact',email='$email',address='$address',username='$username',password='$password',status='$status' where bidder_id='$bidder_id'";
$res=mysql_query($sql);

?>
<script>
alert('Values updated');
document.location="bidder_view.php";
</script>