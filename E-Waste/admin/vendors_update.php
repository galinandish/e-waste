<?php
$v_id=$_POST['v_id'];
$v_name=$_POST['v_name'];
$v_address=$_POST['v_address'];
$v_contact=$_POST['v_contact'];
$v_email=$_POST['v_email'];
$v_username=$_POST['v_username'];
$v_password=$_POST['v_password'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update vendors set v_name='$v_name',v_address='$v_address',v_contact='$v_contact',v_email='$v_email',v_username='$v_username',v_password='$v_password' where v_id='$v_id'";
$res=mysql_query($sql);

?>
<script>
alert('Values updated');
document.location="vendors_view.php";
</script>