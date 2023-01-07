<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>registration_details</title>
</head>

<body>
<?php 
           $id=$_POST['id'];
      $reg=$_POST['reg'];
	  $con=$_POST['con'];
	  $pid=$_POST['pid'];
	
	  $otp=$_POST['otp']; 
	$ot=$_POST['ot'];
	   
	  include('dbconnection.php');
	  
	    if($ot==$otp)
	  {
	  $sql="update payment set status='paid' where pay_id='$pid'";
	  mysql_query($sql);
	  
	  $sql1="update bill set status='paid' where bill_id='$id'";
	  mysql_query($sql1);
	  	  
	  
	  ?>
	  
	  <script>
	  alert('Thank you for the payment');
	  document.location="bill_v.php";
	  </script>
	  <?php
	  }
	  else
	  {
	  ?>
	  <script>
	  alert('sorry your OTP doesnot match');
	  document.location="index.php";
	  </script>
	  <?php
	  }
	  ?>
</body>
</html> 