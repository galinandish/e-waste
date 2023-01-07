<?php session_start(); ?>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];	
	include('dbconnection.php');
	$sql="select * from login where uname='$username' and pwd='$password'";
	$res=mysql_query($sql);
	if($row=mysql_fetch_array($res))
	{
	$type=$row["utype"];
	
	$_SESSION["uname"]=$username;
	
	if($type=="admin")
	{
	?>
	<script>
	document.location="Admin/main.php";
	</script>
	<?php
	}
	
	else if($type=="customer")
	{
	?>
	<script>
	document.location="Customer/main.php";
	</script>
	<?php
	}
	
	
	
	else if($type=="vendor")
	{
	?>
	<script>
	document.location="Vendor/main.php";
	</script>
	<?php
	}
	
}
	
	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>