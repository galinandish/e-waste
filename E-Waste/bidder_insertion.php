<?php
$b_name=$_POST['b_name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$status=$_POST['status'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into bidder values(null,'$b_name','$contact','$email','$address','$username','$password','$status')";
$res=mysql_query($sql);

?>
<script>
alert('Values inserted');
document.location="bidder_view.php";
</script>