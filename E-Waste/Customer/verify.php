<?php
$id=$_POST['id'];
$reg=$_POST['reg'];
$con=$_POST['con'];
$cname=$_POST['cname'];
$cno=$_POST['cno'];
$mon=$_POST['mon'];
$year=$_POST['year'];
$cvv=$_POST['cvv'];

echo $otp=rand();

$msg="Please+Authorize+the+OTP+sent+to+your+registered+contact+no+".$otp."+.+";
	  $data=urlencode($msg);
 $smsurl="http://123.108.46.12/API/WebSMS/Http/v1.0a/index.php?username=Urneeds&password=qwerty&sender=URNEED&to=$con&message=$msg";
	  
  $content = file_get_contents($smsurl);

include('dbconnection.php');
$sql="insert into payment values(null,'$id','$reg','$cname','$cno','$cvv','$mon','$year','$otp','')";
mysql_query($sql);

echo $pid=mysql_insert_id();
?>

<script>
alert('Enter the OTP sent to you registered Mobile No');
document.location="verify1.php?pid=<?php echo $pid; ?>";
</script>