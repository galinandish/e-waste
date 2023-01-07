<?php
	$uname=$_POST['uname'];
	$cont=$_POST['con'];
	$a=$_POST['pwd'];
	$b=$_POST['password'];
	
		include('dbconnection.php');
	 $sql = "select * from registration where email_id='$uname' and contact_no='$cont'";
		//echo $sql;
	if($a==$b)
	{
		$res = mysql_query($sql);
		if(mysql_num_rows($res)>0)
		{
		 $sql1 = "update login set pwd = '$a' where uname ='$uname'";
			$res1 = mysql_query($sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="index.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="index.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="index.php";
				</script>
			<?php
		}
		
?>