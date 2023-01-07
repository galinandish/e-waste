<?php
include('db.php');
$bank_id=$_POST['bank_id'];
$p_accno=$_POST['p_accno'];
$p_date=$_POST['p_date'];
$paid_for=$_POST['paid_for'];
$p_amount=$_POST['p_amount'];
$p_company=$_POST['p_company'];
//$p_type='debit';

 $sql1="select * from bank_details where bank_id='$bank_id'";
  $res1=mysql_query($sql1);
  $row1=mysql_fetch_array($res1);
  
  $user_id=$row1['user_id'];
  
  $sql2="select * from user where user_id='$user_id'";
  $res2=mysql_query($sql2);
  $row2=mysql_fetch_array($res2);
  
  $contact=$row2['user_contact'];
  
  $bal=$row1['balance'];
  if($bal<$p_amount)
  {
  ?>
  <script>
  alert('Invalid Amount');
  document.location="payments.php";
  </script>
  <?php
  }
  else
  {

$otp=rand();
  
  $sql="insert into payments values(null,'$bank_id','$p_accno','$p_date','$paid_for','$p_amount','$p_company','$otp','debit')";
  mysql_query($sql);
  
 $pid=mysql_insert_id();
 
 
$otp=rand();

$msg="Please+Authorize+the+OTP+:+".$otp."+sent+to+your+registered+contact+no+.+";
	  $data=urlencode($msg);
   
$smsurl="http://123.108.46.13/API/WebSMS/Http/v1.0a/index.php?username=Urneeds&password=studneeds&sender=URNEED&to=$contact&message=$msg";
    $content = file_get_contents($smsurl);
 ?>
 <script>
 alert('values inserted');
 document.location="pay_otp.php?id=<?php echo $pid; ?>&bid=<?php echo $bank_id;?>&pa=<?php echo $p_accno; ?>&pd=<?php echo $p_date; ?>&pf=<?php echo $paid_for; ?>&pam=<?php echo $p_amount; ?>&pc=<?php echo $p_company; ?>&otp=<?php echo $otp; ?>&pt=<?php echo debit; ?>";
 </script>
 <?php
 }
 ?>